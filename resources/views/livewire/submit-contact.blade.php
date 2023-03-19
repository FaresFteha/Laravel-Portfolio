 <div class="col-lg-6 form-block">
     <h3>Write me a message</h3>
     <div class="form-message">
         <p></p>
     </div>
     <div class="col-md-12">
         <div class="input-group mb-3">
             <label for="inputName" class="form-label visually-hidden">Name</label>
             <input type="text" class="form-control" wire:model="name" placeholder="Name*"
                 class="@error('name') is-invalid @enderror">
         </div>
         @error('name')
         <div class="alert alert-danger">{{ $message }}</div>
     @enderror
     </div>
     <div class="col-md-12">

         <div class="input-group mb-3">
             <label for="inputEmail" class="form-label visually-hidden">Email</label>
             <input type="email" class="form-control" wire:model="email" id="inputEmail" placeholder="Email*"
                 class="@error('email') is-invalid @enderror">
         </div>
         @error('name')
             <div class="alert alert-danger">{{ $message }}</div>
         @enderror
     </div>
     <div class="col-md-12">
         <label for="inputMessage" class="form-label visually-hidden">Message</label>
         <textarea class="form-control mb-3" wire:model="message" id="inputMessage" placeholder="Your message here*"
             class="@error('message') is-invalid @enderror"></textarea>
         @error('message')
             <div class="alert alert-danger">{{ $message }}</div>
         @enderror
         <button wire:click="SendMessage()" class="btn btn-main">Send Message</button>
     </div>
 </div>
