<div>
    <main id="main" class="main-site">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="/" class="link">home</a></li>
					<li class="item-link"><span>Custom Order</span></li>
				</ul>
			</div>


        <h1 style="text-align: center;">Custom Order</h1>
        <h3 style="text-align: center;">Because every cake has a story to tell...</h3>
        <div style="text-align: center;">
        <div class="form-group">
                                @if(Session::has('message'))
									<div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
								@endif

        <form  name="form-contact" wire:submit.prevent="customOrder">
            <label class="form-label" for="flavour">Flavour:</label>
            <select name="city" id="city" wire:model="flavour">
                <option value="">--Select-Flavour--</option>
                <option value="choclate cake">Chocolate Cake</option>
                <option value="vanilla cake">Vanilla Cake</option>
                <option value="strawberry cake">Strawberry Cake</option>
            </select>
        </div>

        <div class="form-group">
            <label class="form-label" for="shape">Shape</label>
            <select name="shape" id="shape" wire:model="shape">
                <option value="">--Select-Shape--</option>
                <option value="round">Round</option>
                <option value="square">Square</option>
                <option value="rectangle">Rectangle</option>
            </select>
            <div>

        <div class="form-group">
            <label class="form-label" for="eggless">Eggless</label>
            <select name="eggless" id="eggless" wire:model="eggless">
                <option value="">--Select--</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
            

                <div class="form-group">
                    <label class="form-label" for="message">Message on Cake</label>
                    <input style="text-align: center;"type="text" class="form-control" name="message" id="message" value=""
                        placeholder="Enter Your Message" wire:model="message">
                </div>

                <div class="form-group">
                    <label class="form-label" for="note">Note</label>
                    <input type="text"  style="text-align: center;" class="form-control" name="note" id="note" value=""
                        placeholder="Enter Your Note here" wire:model="note">
                </div>

                {{-- <div>
                    <label for="image" wire:model="image">Upload Image</label>
                <input type="file" id="image">
                </div> --}}
                
            
            <div>
                <button type="submit" class="btn btn-medium">Submit</button>
            </div>

        </form>
        </div>
</main>
</div>


