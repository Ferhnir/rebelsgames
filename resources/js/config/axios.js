import axios from 'axios';
const instance = axios.create({
    baseURL: 'http://rebelsgames.test/'
});

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    instance.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found');
}

instance.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// instance.interceptors.request.use(function (config) {
//     return config;
//   }, function (error) {
//     return Promise.reject(error);
//   }, function() {
//   });

// instance.interceptors.response.use(function (response) {
//     return response;
//   }, function (error) {
//     return Promise.reject(error);
//   });

  export default instance;