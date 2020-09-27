<template>
  <div>
    <h1>USERS</h1>
    <ul>
      <li v-for="user in users">{{ user.login }}</li>
    </ul>
  </div>
</template>

<script>
import axios from 'axios';
import r from '../route';
export default {
  data() {
    return {
      users: []
    }
  },
  computed: {
    cUsers: function () {
      return this.users;
    }
  },
  methods: {
    getUsers()
    {
      axios.get(r('users.index'))
      .then((response) => {
        this.users = response.data.users
      });


    }
  },
  mounted() {
    this.getUsers();
  }
}
</script>
