<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Project</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css">
</head>
<body>

    <div id="app" class="container">
        <example></example>

        @include ('project.list')
        
        <form method="POST" action="/projects" @submit.prevent="onSubmit"  @keydown="form.errors.clear($event.target.name)">
            <div class="control">
                <label for="name" class="label">Project name:</label>
                <input class="input" type="text" name="name" v-model="form.name">
                <span class="help is-danger" v-if="form.errors.has('name')" v-text="form.errors.get('name')"></span>
            </div>

            <div class="control">
                <label for="description" class="label">Project description:</label>
                <input class="input" type="text" name="description" v-model="form.description">
                <span class="help is-danger" v-if="form.errors.has('description')" v-text="form.errors.get('description')"></span>
            </div>


            <div class="control">
                <button class="button is-primary" :disabled="form.errors.any()">Submit</button>
            </div>
        </form>
    </div>
    
    <script src="/js/vendor.js"></script>
    <script src="/js/app.js"></script>
</body>
</html>