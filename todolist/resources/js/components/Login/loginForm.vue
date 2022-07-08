<!-- <template>
    <div class="max-w-md w-full space-y-8">
      <div>
        <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow" />
        <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Sign in to your account</h2>

      </div>
      <form class="mt-8 space-y-6" action="#" method="POST">
        <input type="hidden" name="remember" value="true" />
        <div class="rounded-md shadow-sm -space-y-px">
          <div>
            <label for="email-address" class="sr-only">Email address</label>
            <input id="email-address" name="email" type="email" autocomplete="email" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Email address" />
          </div>
          <div>
            <label for="password" class="sr-only">Password</label>
            <input id="password" name="password" type="password" autocomplete="current-password" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Password" />
          </div>
        </div>

        <div>
          <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
              <LockClosedIcon class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" aria-hidden="true" />
            </span>
            Sign in
          </button>
        </div>
      </form>
    </div>
</template>
<script>
export default{
    
}
</script> -->

<style scoped>
button {
  font-weight: bold;
}
.box{
  background-color: black;
  height: 200px;
  width: 200px;
}
.box2{
  background-color: red;
  height: 200px;
  width: 200px;
}
.box3{
  background-color: blue;
  height: 200px;
  width: 200px;
}
.email{
  border: 1px solid black;
}
</style>
<template>
  
  <div>
    <span>
  
      <button @click.prevent.stop="togglebox">toggle box</button>
      <div class="box" v-if="isVisible"></div>
      {{ greeting }}
  <input class="email" @keyup.enter="greet(greeting + '!!!!')" v-model="greeting" />
    </span>
  </div>
  <hr />
  

</template>


<script>


export default {
  data() {
    return {
      greeting : "hello world",
      isVisible: false,

    }
  },
  methods: {
    togglebox: function(){
      this.isVisible = !this.isVisible
    },
    greet: function(greeting){
      console.log(greeting)
    }
  },
  
}
</script>