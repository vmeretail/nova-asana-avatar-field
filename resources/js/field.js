Nova.booting((Vue, router, store) => {
  Vue.component('index-nova-asana-avatar-field', require('./components/IndexField'))
  Vue.component('detail-nova-asana-avatar-field', require('./components/DetailField'))
  Vue.component('form-nova-asana-avatar-field', require('./components/FormField'))
})
