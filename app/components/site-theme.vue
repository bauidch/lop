<template>

    <div class="uk-margin uk-flex uk-flex-space-between uk-flex-wrap" data-uk-margin>
        <div data-uk-margin>
            <h2 class="uk-margin-remove">{{ 'Theme' | trans }}</h2>
        </div>
        <div data-uk-margin>
            <button class="uk-button uk-button-primary" @click.prevent="save">{{ 'Save' | trans }}</button>
        </div>
    </div>

    <div class="uk-form uk-form-horizontal">

        <div class="uk-form-row">
            <span class="uk-form-label">{{ 'Copyright text' | trans }}</span>

            <div class="uk-form-controls">
                <v-editor id="form-intro" :value.synv="config.copyright"
                          :options="{markdown : false, height: 150}"></v-editor>
            </div>
        </div>
    </div>

</template>

<script>
    module.exports = {
        section: {
            label: 'Theme',
            icon: 'pk-icon-large-brush',
            priority: 15
        },
        data: function () {
            return _.extend({config: {}}, window.$theme);
        },
        events: {
            save: function() {
                this.$http.post('admin/system/settings/config', {name: this.name, config: this.config}).catch(function (res) {
                    this.$notify(res.data, 'danger');
                });
            }
        }
    };
    window.Site.components['site-theme'] = module.exports;
</script>