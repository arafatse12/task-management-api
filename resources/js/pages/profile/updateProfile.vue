<template>
  <div>
    <h1>Update Profile</h1>
    <form @submit.prevent="updateProfile">
      @csrf
      <label>Name:</label>
      <input type="text" v-model="name" class="form-control" required>
      
      <label>Email:</label> 
      <input type="email" v-model="email" class="form-control" required>

      <!-- Add more fields as needed -->

      <button type="submit">Update</button>
    </form>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      name: '',
      email: ''
      // Add more fields as needed
    };
  },
  methods: {
    updateProfile() {
      const userData = {
        name: this.name,
        email: this.email
        // Add more fields as needed
      };

      axios.post('home/profile/update', userData, {
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    })
        .then(response => {
          console.log('Profile updated successfully');
          // Optionally, you can redirect to another page or show a success message
        })
        .catch(error => {
          console.error('Error updating profile:', error);
          // Handle error (e.g., show error message)
        });
    }
  }
};
</script>
