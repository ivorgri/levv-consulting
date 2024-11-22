import { createApp, reactive } from "/packages/levv/levv_theme/js/petite_vue.js";

const store = reactive({
    collaborations: collaborations,
    selectedIndex: 0,
    selectedCollaboration: collaborations[0]
});

const CollaborationSlider = function () {
    return {
        $template: "#collaboration-slider-template"
    };
}

createApp({
    CollaborationSlider,
    store,
    updateSelectedIndex(element) {
        let selectedIndexValue = element.target.value;
        store.selectedIndex = parseInt(selectedIndexValue);
        store.selectedCollaboration = collaborations[store.selectedIndex];
    },
    nextCollaboration(element) {
        const newIndex = store.selectedIndex + 1
        store.selectedIndex = newIndex > (collaborations.length - 1) ? 0 : newIndex;
        store.selectedCollaboration = collaborations[store.selectedIndex];
    },
    previousCollaboration(element) {
        const newIndex = store.selectedIndex - 1
        store.selectedIndex = newIndex < 0 ? (collaborations.length - 1) : newIndex;
        store.selectedCollaboration = collaborations[store.selectedIndex];
    } 
}).mount();