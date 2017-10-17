class Errors {
    constructor() {
        this.errors = {};
    }

    get(field) {
        if (this.errors[field]) {
            return this.errors[field][0];
        }
    }

    record(errors) {
        this.errors = errors;
    }

    clear(field) {
        delete this.errors[field];
    }

    has(filed) {
        return this.errors.hasOwnProperty(filed);
    }

    any() {
        return Object.keys(this.errors).length > 0;
    }
}

new Vue({
    el: '#app',

    data: {
        name: '',
        description: '',
        errors: new Errors()
    },

    methods: {
        onSubmit() {
            axios.post('/projects', this.$data)
                .then(this.onSuccess)
                .catch(error => this.errors.record(error.response.data.errors));
        },

        onSuccess() {
            alert('success');
            this.name = '';
            this.description = '';
        }
    }
});