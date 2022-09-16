<div class="row d-flex w-100">
    <div class="w-50 position-relative border-end border-success {{isset($right) ? '' : 'line'}} border-2">
        <article class="single {{isset($right) ? 'd-none' : ''}}">
            <div class="tag">
                <i class="fa-solid text-white fa-{{$icon}} fs-2"></i>
                <p class="fs-3 fw-bold" style="color: #1f5233">{{$number}}</p>
            </div>
            <div class="info">
                <h2 class="title-section fs-4">{{$title}}</h2>
                <p>{{$text}}</p>
            </div>
        </article>
        <span class="pointer"></span>
    </div>
    <div class="w-50 border-start border-success border-2 d-flex justify-content-end {{isset($right) ? 'line' : ''}}">
        <article class="single right {{isset($right) ? '' : 'd-none'}}">
            <div class="tag">
                <i class="fa-solid text-white fa-{{$icon}} fs-2"></i>
                <p class="fs-3 fw-bold" style="color: #1f5233">{{$number}}</p>
            </div>
            <div class="info">
                <h2 class="title-section fs-4">{{$title}}</h2>
                <p class="w-100">{{$text}}</p>
            </div>
        </article>
    </div>
</div>
