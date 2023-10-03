<div style="width: 100%; height: {{$attributes['height']}}; background: #4b5563">
    <div class="top-menu-container">
        <div class="item">
            <input type="text" class="form-control" placeholder="Pesquisar"
                   style="background-color: rgba(255,255,255, 0.2);">
        </div>
        <div class="item flex-grow-1 text-center">
            Mensagem
        </div>
        <div class="item">
            <i class="icon fa-solid fa-layer-group"></i>
        </div>
        <div class="item p-1">
            <img class="img-fluid rounded-circle" alt="Profile image" style="height: 80%"
                 src="https://avatars.githubusercontent.com/u/36198151?s=400&u=934116f8d9a30a0bb8afad07e9fa9735a0285546&v=4">
        </div>
    </div>
</div>

<style>
    .top-menu-container {
        height: 100%;
        display: flex;
    }

    .top-menu-container .item {
        height: 100%;
        margin: 0 5px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .top-menu-container .item .icon {
        font-size: 2em;
    }

    .top-menu-container .item input::placeholder {
        color: #ccc;
        opacity: 1; /* Firefox */
    }
</style>
