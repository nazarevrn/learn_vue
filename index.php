<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<div id="app">
    {{ message }}
</div>

<div id="app-4">
    <ol>
        <li v-for="todo in todos">
            {{ todo.text }}
        </li>
    </ol>
</div>

<div id="app-5">
    <p>{{ message }}</p>
    <button v-on:click="reverseMessage">Перевернуть сообщение</button>
</div>

<div id="app-7">
    <ol>
        <todo-item
            v-for="item in groceryList"
            v-bind:todo="item"
            v-bind:key="item.id"
        ></todo-item>
    </ol>
</div>



<script>

    Vue.component('todo-item', {
        props: ['todo'],
        template: '<li>{{ todo.text }}</li>'
    })

    var app7 = new Vue({
        el: '#app-7',
        data: {
            groceryList: [
                { id: 0, text: 'Овощи' },
                { id: 1, text: 'Сыр' },
                { id: 2, text: 'Что там ещё люди едят?' }
            ]
        }
    })


    var app = new Vue({
        el: '#app',
        data: {
            message: 'Привет, Vue!'
        }
    })

    var app4 = new Vue({
        el: '#app-4',
        data: {
            todos: [
                { text: 'Изучить JavaScript' },
                { text: 'Изучить Vue' },
                { text: 'Создать что-нибудь классное' }
            ]
        }
    })

    var app5 = new Vue({
        el: '#app-5',
        data: {
            message: 'Привет, Vue.js!'
        },
        methods: {
            reverseMessage: function () {
                this.message = this.message.split('').reverse().join('')
            }
        }
    })


</script>