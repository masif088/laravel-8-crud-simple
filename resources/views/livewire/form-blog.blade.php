<div id="form-create" class=" card p-4">
    <form wire:submit.prevent="{{$action}}"  x-init="myAlert()">
        <div class="form-group col-span-6 sm:col-span-5">
            <label for="name">{{__('Judul Tulisan')}}</label>
            <input id="name" type="text" class="mt-1 block w-full form-control shadow-none"
                   wire:model.defer="data.title" required/>
        </div>
        <div class="form-group col-span-6 sm:col-span-5">
            <label for="name">{{__('Judul Tulisan')}}</label>
        <textarea name="" id="" cols="30" rows="10" wire:model.defer="data.content" class="mt-1 block w-full form-control shadow-none" required></textarea>
        </div>
        <div class="form-group col-span-6 sm:col-span-5">
            <label for="name">{{__('Judul Tulisan')}}</label>
            <input id="name" type="file" class="mt-1 block w-full form-control shadow-none"
                   wire:model.defer="file" required/>
        </div>



        <div class="form-group col-span-6 sm:col-span-5"></div>
        <button type="submit" id="submit" class="btn btn-primary">Submit</button>
    </form>
    <script>

        document.addEventListener('livewire:load', function () {
                // if ()
            });

    </script>


        </div>
