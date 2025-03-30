<x-layout>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid"> 
      <a class="navbar-brand" href="#"> 
        <img id="logo-canal" alt="#" src="{{ asset('images/emoji-canal.jpg')}}" class="img-responsive">
        <label>  CANAL </label> 
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">TIERLIST</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
   <x-card class="m-3 p-3"> 
    <x-card class="row mt-1 p-2" classBody="p-0"> 
      <div class="col-12 p-0 d-flex justify-content-start align-items-center"> 
          <div class="col-lg-1 d-flex justify-content-center align-items-center bg bg-success text-light" 
              style="width: 8%; height: 100px; border-radius: 6px 6px 6px 6px;">
            TIER A
          </div>
          <div class="tier col-lg-11 ms-1 pe-1 d-flex justify-content-center align-items-center" 
          style=" width: 92%; height: 100px;"
          >
          <div class="item card d-flex justify-content-center align-items-center" draggable="true" style="width: 100px; height: 100px;"> ITEM 1 </div>
          </div>
      </div>
    </x-card>
    <x-card class="row mt-1 p-2" classBody="p-0"> 
      <div class="col-12 p-0 d-flex justify-content-start align-items-center"> 
          <div class="col-lg-1 d-flex justify-content-center align-items-center bg bg-warning text-light" 
              style="width: 8%; height: 100px; border-radius: 6px 6px 6px 6px;">
            TIER B
          </div>
          <div class="tier col-lg-11 ms-1 pe-1 d-flex justify-content-center align-items-center" 
          style=" width: 92%; height: 100px;"
          >
            <div class="item card d-flex justify-content-center align-items-center" draggable="true" style="width: 100px; height: 100px;"> ITEM 2 </div>
          </div>
      </div>
    </x-card>
    <x-card class="row mt-1 p-2" classBody="p-0"> 
      <div class="col-12 p-0 d-flex justify-content-start align-items-center"> 
          <div class="col-lg-1 d-flex justify-content-center align-items-center bg bg-danger text-light" 
              style="width: 8%; height: 100px; border-radius: 6px 6px 6px 6px;">
            TIER C
          </div>
          <div class="tier col-lg-11 ms-1 pe-1 d-flex justify-content-center align-items-center" 
          style=" width: 92%; height: 100px;"
          >
            <div class="item card d-flex justify-content-center align-items-center" draggable="true" style="width: 100px; height: 100px;"> ITEM 3 </div>
          </div>
      </div>
    </x-card>
  </x-card>
</x-layout>
  <style>
    #logo-canal {
      width: 50px;
      padding: 5px;
    }

    .dragging {
      opacity: 0.5;
    }
  </style>
  <script>

    const tiers = document.querySelectorAll(".tier");

    document.addEventListener("dragstart", (e) => {
      e.target.classList.add("dragging");
      // *O evento dragstart é acionado quando um item começa a ser arrastado.

      // *e.target é o elemento que está sendo arrastado.
      
      // *classList.add("dragging") adiciona a classe "dragging" para identificar o item arrastado.
    });

    document.addEventListener("dragend", (e) => {
      e.target.classList.remove("dragging");
      // *O evento dragend é acionado quando o item deixa de ser arrastado.
      
      // *classList.remove("dragging") remove a classe "dragging", restaurando o estilo do elemento.
    });

    tiers.forEach((item) => {
      item.addEventListener("dragover", (e) => {
        e.preventDefault(); // Necessário para permitir o drop
        const dragging = document.querySelector(".dragging");
        const applyAfter = getNewPosition(item, e.clientY);

        if(applyAfter) {
          applyAfter.insertAdjacentElement("afterend", dragging);
        } else {
          item.prepend(dragging);
        }
        
      });
    });

    function getNewPosition(column, posY) {
      const cards = column.querySelectorAll(".item:not(.dragging)");
      let result;

      for (let refer_card of cards) {
        const box = refer_card.getBoundingClientRect();
        const boxCenterY = box.y + box.height / 2;

        if (posY >= boxCenterY) result = refer_card;

      }

      return result;
    }

  </script>