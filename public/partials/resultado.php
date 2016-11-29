<script id="resultado-busca" type="text/x-handlebars-template">
      
    <div class="col-md-12 x_panel">

      <!-- Título -->
      
      <div class="x_title">

        <h2>@{{ modelo }} | @{{ placa }}</h2>

        <div class="clearfix"></div>

      </div>

      <!-- {{-- Conteúdo --}} -->

      <div class="x_content">

        <!-- {{-- Informações do Carro --}} -->

        <div class="col-md-4">
          <strong>Placa:</strong> @{{ placa }}
          <br>
          <strong>Modelo:</strong> @{{ modelo }}
          <br>
          <strong>Cor:</strong> @{{ cor }}
          <br>
          <strong>Proprietário:</strong> @{{ proprietario }}
          <br>
        </div>

        <!-- {{-- Histórico dos Atendimentos --}} -->

        <div class="col-md-8">
          
          <ul class="list-unstyled timeline">

            @{{#each atendimentos}}

              <li>
                <div class="block">
                  <div class="tags">
                    <a href="" class="tag">
                      <span>{{ $atendimento->created_at->format('d/n/y') }}</span>
                    </a>
                  </div>
                  <div class="block_content">
                    <h2 class="title">
                      <a href="javascript:void(0)">Serviços Prestados</a>
                    </h2>
                    <div class="byline">
                      <span>{{ $atendimento->created_at->format('d/n/y') }}</span> by <a>Jane Smith</a>
                    </div>
                    <p class="excerpt">{{ $atendimento->descricao }}</p>
                    <p><strong>Valor:</strong> R$ {{ $atendimento->valor }}</p>
                  </div>
                </div>
              </li>

            @{{/each}}

          </ul>

        </div>

      </div>
      
    </div>

  </script>