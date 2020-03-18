import {ToggleButton} from 'vue-js-toggle-button'
import {ServiceProvider} from '@anomaly/streams-platform';

export class BooleanFieldTypeServiceProvider extends ServiceProvider {
    boot(){
        Vue.component('boolean-field-type', ToggleButton);
    }
}
