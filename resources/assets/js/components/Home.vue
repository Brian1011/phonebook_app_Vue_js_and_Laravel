<template>
    <nav class="panel column is-offset-2 is-8">
        <p class="panel-heading">
            Vuejs Phonebook

            <button class="button is-link is-light ">
                Add New
            </button>
        </p>

        <div class="panel-block">
            <p class="control has-icons-left">
                <input class="input is-small" type="text" placeholder="search">
                <span class="icon is-small is-left">
        <i class="fas fa-search" aria-hidden="true"></i>
      </span>
            </p>
        </div>

        <a class="panel-block is-active">

            <apan class="column is-9">
                Marksheet
            </apan>

            <span class="panel-icon column is-1">
              <i class="has-text-danger fa fa-trash" aria-hidden="true"></i>
            </span>

            <span class="panel-icon column is-1">
              <i class="has-text-info fa fa-edit" aria-hidden="true"></i>
            </span>

            <span class="panel-icon column is-1">
              <i class="has-text-primary fa fa-eye" aria-hidden="true"></i>
            </span>

        </a>

    </nav>
</template>