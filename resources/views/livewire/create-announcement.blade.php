        <div class="container mt-5">
        <div class="row">
            <div class="col-10 col-md-10 mx-auto">
                <form wire:submit.prevent="store">
                    
                    <div class="row g-3">
                        
                        <div class="col-12">
                            <label for="title" class="fw-bold">{{__('ui.title')}}</label><br>
                            <input wire:model.lazy="title" type="text" class="imputRegisterLoginCustom">
                            @error('title') <span class="fs-5 text-danger">{{ $message }}</span> @enderror
                        </div>
                        
                        <div class="col-12">
                            <label for="price" class="fw-bold">{{__('ui.price')}}</label><br>
                            <input wire:model.lazy="price" type="text" class="imputRegisterLoginCustom">
                            @error('price') <span class="fs-5 text-danger">{{ $message }}</span> @enderror
                        </div>
                        
                        <div class="col-12">
                            <label for="category" class="fw-bold">{{__('ui.category')}}</label><br>
                            <select wire:model.lazy="category" class="imputRegisterLoginCustom" aria-label="Default select example">
                                <option selected>{{__('ui.selectaCategory')}}</option>
                                @foreach ($categories as $category)
                            
                                    <option  value="{{ $category->id }}" >{{ Lang::get('category.' . $category->name) }}</option>
                                    
                                @endforeach
                            </select>
                            @error('category') <span class="fs-5 text-danger">{{ $message }}</span> @enderror
                        </div>

                        
                        <div class="col-12">
                            <label for="body" class="fw-bold">{{__('ui.description')}}</label><br>
                            <input wire:model.lazy="body" type="text" class="imputRegisterLoginCustom">
                            @error('body') <span class="fs-5 text-danger">{{ $message }}</span> @enderror
                        </div>

                       
                        {{-- <div class="col-12">
                            <label for="images" class="fw-bold">{{__('ui.images')}}</label><br>
                            <input wire:model="temporary_images" type="file" multiple name="images" class="imputRegisterLoginCustom"
                            @error('temporary_images.*') is-invalid @enderror" placeholder="IMG">
                            @error('temporary_images.*') <span class="small text-danger">{{ $message }}</span> @enderror
                        </div>  --}}
                        <div class="col-12">
                            <label for="images" class="fw-bold">{{__('ui.images')}}</label><br>
                            <input wire:model="temporary_images" type="file" multiple name="images" class="custom-file-input"
                            @error('temporary_images.*') is-invalid @enderror" id="customFile" required>
                            <label class="imputRegisterLoginCustom" for="customFile"><label class="custom-file-label me-3" for="customFile">{{__('ui.chooseFile')}}</label><span class="fs-5"> {{__('ui.selectTheImages')}}</span></label>
                            @error('temporary_images.*') <span class="fs-5 text-danger">{{ $message }}</span> @enderror
                        </div>
                            @if (!empty($images))

                            <div class="row">
                                <div class="col-12">
                                    <p class="my-2 text-dark">{{__('ui.imagePreview')}}</p>
                                    <div class="row border border-4 border-info rounded py-4">
                                        @foreach ($images as $key=>$image)
                                        <div class="col my-3">
                                            <div class="img_preview mx-auto rounded images-imput-create-announcement" style="background-image: url({{$image->temporaryUrl()}})"></div>
                                            <button type="button" class="btn btn-danger d-block text-center mt-2 mx-auto" wire:click="removeImage({{$key}})">{{__('ui.remove')}}</button>
                                        </div>
                                            
                                        @endforeach
                                    </div>
                                </div>
                                
                            </div>
                            @endif

                        
                        <div class="col-12">
                            <button id="uiPost" class="btn btn-bg btn-dark rounded-pill my-3" type="submit">{{__('ui.post')}}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
