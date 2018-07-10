Vue.component('mask-fieldtype', {

    mixins: [Fieldtype],

    data: function() {
        return {
        };
    },

    methods: {
        telephone: function (event) {
            var mask = this.config.mask.find(e => e.value >= this.data.length);
            if(!mask && this.config.mask.length > 0)
                mask = this.config.mask[this.config.mask.length -1];
            else if (!mask)
                mask = {text:''};
            this.data = VMasker.toPattern(this.data, mask.text);
        }
    },

    template: '' +
    '<div>' +
    '<input type="text" v-model="data" @keyup="telephone"/>' +
    '</div>' +
    ''

});