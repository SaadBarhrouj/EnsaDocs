import axios from 'axios';
window.axios = axios;
require('datatables.net-bs4');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
