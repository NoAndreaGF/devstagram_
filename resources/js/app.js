import {Dropzone} from "dropzone";

Dropzone.autoDiscover = false;

window.addEventListener('DOMContentLoaded', () => {
    const dropzone = new Dropzone('#dropzone', {
        dictDefaultMessage: 'Sube aquí tu imagen',
        acceptedFiles: '.png, .jpg, .jpeg, .gif',
        addRemoveLinks: true,
        dictRemoveFile: 'Borrar Archivos',
        maxFiles: 1,
        uploadMultiple: false
    })
})

/**const dropzone = new Dropzone(".dropzone", {
    dictDefaultMessage: "Sube aquí tu imagen",
    acceptedFiles: ".png,.jpg,.jpeg,.gif",
    addRemoveLinks: true,
    dictRemoveFile: "Borrar archivo",
    maxFiles: 1,
    uploadMultiple: false
});**/

