@extends('web.layout.app')
@section('content')
<section class="about_connect looking_for lates_news_main">
    <div class="container-lg container-fluid">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="main_content_wraper">
                    <h4 class="sec_main_heading text-center">FAQ</h4>
                    <p class="sec_main_para text-center">Most Answered Questions</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 ">
                <div class="faq_wraper">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit ?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Praesent interdum justo vitae egestas fringilla. Donec in elementum purus, ut suscipit est. Etiam a lacus et odio commodo porttitor sit amet eget nunc. Suspendisse vitae faucibus quam. Proin eu arcu sit amet ex pulvinar aliquet. Etiam sem lorem, semper vel justo a, rutrum aliquam dui. Nulla congue nisl odio, in consectetur odio efficitur non. Phasellus a cursus arcu. Fusce quis ligula nisi. Quisque cursus magna eu tellus blandit, vitae gravida tellus dapibus. Fusce ultrices aliquam sapien. Nullam varius metus eget aliquam ullamcorper.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit ?

                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Praesent interdum justo vitae egestas fringilla. Donec in elementum purus, ut suscipit est. Etiam a lacus et odio commodo porttitor sit amet eget nunc. Suspendisse vitae faucibus quam. Proin eu arcu sit amet ex pulvinar aliquet. Etiam sem lorem, semper vel justo a, rutrum aliquam dui. Nulla congue nisl odio, in consectetur odio efficitur non. Phasellus a cursus arcu. Fusce quis ligula nisi. Quisque cursus magna eu tellus blandit, vitae gravida tellus dapibus. Fusce ultrices aliquam sapien. Nullam varius metus eget aliquam ullamcorper.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit ?

                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Praesent interdum justo vitae egestas fringilla. Donec in elementum purus, ut suscipit est. Etiam a lacus et odio commodo porttitor sit amet eget nunc. Suspendisse vitae faucibus quam. Proin eu arcu sit amet ex pulvinar aliquet. Etiam sem lorem, semper vel justo a, rutrum aliquam dui. Nulla congue nisl odio, in consectetur odio efficitur non. Phasellus a cursus arcu. Fusce quis ligula nisi. Quisque cursus magna eu tellus blandit, vitae gravida tellus dapibus. Fusce ultrices aliquam sapien. Nullam varius metus eget aliquam ullamcorper.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
