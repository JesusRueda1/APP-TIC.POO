/*!
    * Start Bootstrap - SB Admin v7.0.5 (https://startbootstrap.com/template/sb-admin)
    * Copyright 2013-2022 Start Bootstrap
    * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
    */
    // 
// Scripts
// 

class Sidebar {
    constructor() {
        this.sidebarToggle = document.body.querySelector('#sidebarToggle');
    }

    init() {
        window.addEventListener('DOMContentLoaded', event => {
            this.toggleSidebar();
        });
    }

    toggleSidebar() {
        if (this.sidebarToggle) {
            this.sidebarToggle.addEventListener('click', event => {
                event.preventDefault();
                document.body.classList.toggle('sb-sidenav-toggled');
                localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
            });
        }
    }
}

const sidebar = new Sidebar();
sidebar.init();