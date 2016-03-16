<template>

    <div class="uk-form-horizontal">

        <template v-if="node.type === 'page'">
            <div class="uk-form-row">
                <span class="uk-form-label">{{ 'Title' | trans }}</span>
                <div class="uk-form-controls uk-form-controls-text">
                    <label><input type="checkbox" v-model="node.theme.title_hide"> {{ 'Hide Title' | trans }}</label>
                </div>
            </div>

        <div class="uk-form-row">
            <label class="uk-form-label">{{ 'Hero Image' | trans }}</label>
            <div class="uk-form-controls uk-form-controls-text">
                <p class="uk-form-controls-condensed uk-form-width-large"><input-image :source.sync="node.theme.hero_image"></input-image></p>
                <p class="uk-form-help-block">{{ 'Select a background image for the hero position.' | trans }}</p>
            </div>
        </div>
    </div>

</template>

<script>

    module.exports = {

        section: {
            label: 'Theme',
            priority: 90
        },

        props: ['node']

    };

    window.Site.components['node-theme'] = module.exports;

</script>
