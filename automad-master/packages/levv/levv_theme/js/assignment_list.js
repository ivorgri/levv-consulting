import { createApp, reactive } from "/packages/levv/levv_theme/js/petite_vue.js";

const store = reactive({
    assignmentTags: assignmentTags,
    selectedLevvBorderElement: 'all',
    assignments: assignments,
    selectedAssignments: selectedAssignments
});

const AssignmentTagFilter = function () {
    return {
        $template: "#assignment-tag-filter-template"
    };
}

const AssignmentFilteredList = function () {
    return {
        $template: "#assignment-filtered-list-template"
    };
}

createApp({
    AssignmentTagFilter,
    AssignmentFilteredList,
    store,
    updateAssignmentsList(event) {
        event.preventDefault();
        let clickedElement = event.target;
        while (clickedElement.nodeName !== "BUTTON") {
            clickedElement = clickedElement.parentNode;
        }
        const filterTag = clickedElement.value;
        if (filterTag == "all") {
            store.selectedAssignments = store.assignments;
            store.selectedLevvBorderElement = filterTag;
            return;
        }
        let filteredAssignments = [];
        for (let i = 0; i < store.assignments.length; ++i) {
            const assignment = JSON.parse(JSON.stringify(store.assignments[i]))
            if (assignment.tags.includes(filterTag)){
                filteredAssignments.push(assignment);
            }
        }
        store.selectedAssignments = filteredAssignments
        if (selectedAssignments.length === 0) {
            store.selectedAssignments = store.assignments;
            store.selectedLevvBorderElement = filterTag;
            return;
        }
        store.selectedLevvBorderElement = filterTag;
    }    
}).mount();