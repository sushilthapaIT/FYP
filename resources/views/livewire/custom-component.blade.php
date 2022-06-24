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
             <div class="form-group">
            <label class="form-label" for="flavour">Flavour:</label>
            <select name="flavour" class="form-control" wire:model="flavour">
                <option value="">--Select-Flavour--</option>
                <option value="choclate cake">Chocolate Cake</option>
                <option value="vanilla cake">Vanilla Cake</option>
                <option value="strawberry cake">Strawberry Cake</option>
            </select>
        </div>

        <div class="form-group">
            <label class="form-label" for="shape">Shape</label>
            <select name="shape" class="form-control" wire:model="shape">
                <option value="">--Select-Shape--</option>
                <option value="round">Round</option>
                <option value="square">Square</option>
                <option value="rectangle">Rectangle</option>
            </select>
        </div>

        <div class="form-group">
            <label class="form-label" for="eggless">Eggless</label>
            <select name="eggless"  class="form-control" wire:model="eggless">
                <option value="">--Select--</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
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
                
            			<div class="col-md-12">
					<div class="wrap-address-billing">
					<h3 class="box-title">Shipping Adress</h3>
					<div class="billing-address">
						<p class="row-in-form">
							<label for="fname">first name<span>*</span></label>
							<input  type="text" name="fname" value="" placeholder="Your name" wire:model="s_firstname">
							@error('s_firstname') <span class="text-danger">{{ $message }}</span>@enderror
						</p>
						<p class="row-in-form">
							<label for="lname">last name<span>*</span></label>
							<input  type="text" name="lname" value="" placeholder="Your last name" wire:model="s_lastname">
							@error('s_lastname') <span class="text-danger">{{ $message }}</span>@enderror
						</p>
						<p class="row-in-form">
							<label for="email">Email Addreess:</label>
							<input  type="email" name="email" value="" placeholder="Type your email" wire:model="s_email">
							@error('s_email') <span class="text-danger">{{ $message }}</span>@enderror
						</p>
						<p class="row-in-form">
							<label for="phone">Phone number<span>*</span></label>
							<input  type="number" name="phone" value="" placeholder="10 digits format" wire:model="s_mobile">
							@error('s_mobile') <span class="text-danger">{{ $message }}</span>@enderror
						</p>
						<p class="row-in-form">
							<label for="add">Line1:</label>
							<input  type="text" name="add" value="" placeholder="Street at apartment number" wire:model="s_line1">
							@error('s_line1') <span class="text-danger">{{ $message }}</span>@enderror
						</p>
						<p class="row-in-form">
							<label for="add">Line2:</label>
							<input  type="text" name="add" value="" placeholder="Street at apartment number" wire:model="s_line2">
						</p>
						<p class="row-in-form">
							<label for="country">Country<span>*</span></label>
							<input  type="text" name="country" value="" placeholder="Your Country" wire:model="s_country">
							@error('s_country') <span class="text-danger">{{ $message }}</span>@enderror
						</p>
						<p class="row-in-form">
							<label for="city">Province<span>*</span></label>
							<input type="text" name="province" value="" placeholder="Province" wire:model="s_province">
							@error('s_province') <span class="text-danger">{{ $message }}</span>@enderror
						</p>
						<p class="row-in-form">
							<label for="city">Town / City<span>*</span></label>
							<input type="text" name="city" value="" placeholder="City name" wire:model="s_city">
							@error('s_city') <span class="text-danger">{{ $message }}</span>@enderror
						</p>
						<p class="row-in-form">
							<label for="zip-code">Postcode / ZIP:</label>
							<input  type="number" name="zip-code" value="" placeholder="Your postal code" wire:model="s_zipcode">
							@error('s_zipcode') <span class="text-danger">{{ $message }}</span>@enderror
						</p>
					</div>
				</div>
			</div>
            
            <div>
                <button type="submit" class="btn btn-medium">Submit</button>
            </div>

        </form>
        </div>
</main>
</div>


