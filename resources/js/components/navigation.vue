<template>
    <header>
        <ul class="top-navigation">
            <li class="item">
                <router-link to="/">
                    <i class="material-icons">home</i>
                    Home
                </router-link>
            </li>
            <li class="item">
                <router-link to="/backup">
                    <i class="material-icons">backup</i>
                    Backup
                </router-link>
            </li>
            <li class="item">
                <router-link to="/settings">
                    <i class="material-icons">settings</i>
                    Settings
                </router-link>
            </li>
        </ul>

        <div class="header-info">
            Where you can manage your backups
        </div>

    </header>
</template>

<script>
    export default{
    }
</script>
