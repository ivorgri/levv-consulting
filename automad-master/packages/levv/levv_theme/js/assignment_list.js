import { createApp, reactive } from "/packages/levv/levv_theme/js/petite_vue.js";

const store = reactive({
    assignmentTags: assignmentTags,
    selectedAssignmentTag: 'all',
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
    updateAssignmentsList(element) {
        const filterTag = element.target.value;
        if (filterTag == "all") {
            store.selectedAssignments = store.assignments;
            store.selectedAssignmentTag = filterTag;
            return;
        }
        store.selectedAssignments = store.assignments.filter(function(assignment){
            return assignment.tags.includes(filterTag)
        })
        if (selectedAssignments.length === 0) {
            store.selectedAssignments = store.assignments;
            store.selectedAssignmentTag = filterTag;
            return;
        }
        store.selectedAssignmentTag = filterTag;
    }    
}).mount();