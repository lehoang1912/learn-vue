<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Project</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css">
</head>
<body>

    <div id="app" class="container">
        @include ('project.list')
        
        <form method="POST" action="/projects" @submit.prevent="onSubmit"  @keydown="errors.clear($event.target.name)">
            <div class="control">
                <label for="name" class="label">Project name:</label>
                <input class="input" type="text" name="name" v-model="name">
                <span class="help is-danger" v-if="errors.has('name')" v-text="errors.get('name')"></span>
            </div>

            <div class="control">
                <label for="description" class="label">Project description:</label>
                <input class="input" type="text" name="description" v-model="description">
                <span class="help is-danger" v-if="errors.has('description')" v-text="errors.get('description')"></span>
            </div>


            <div class="control">
                <button class="button is-primary" :disabled="errors.any()">Submit</button>
            </div>
        </form>
    </div>
    <script src="https://unpkg.com/vue@2.5.2/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="/js/app.js"></script>
</body>
</html>