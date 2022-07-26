import Fieldtype from './components/pixel';

Statamic.booting(() => {
    Statamic.$components.register('pixel-fieldtype', Fieldtype);
});
