
<div>
    <main id="main" class="main-site">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="/" class="link">home</a></li>
					<li class="item-link"><span>Subscription</span></li>
				</ul>
			</div>


        <h1 style="text-align: center;">Subscribe Now</h1>
        <h3 style="text-align: center;">Subscribe For Newsletter</h3>
        <div style="text-align: center;">
        <div class="form-group">
                                @if(Session::has('message'))
									<div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
								@endif

        <form  name="form-contact" wire:submit.prevent="subscribe">
            
                <div class="form-group">
                    {{-- <label class="form-label" for="note">Note</label> --}}
                    <input type="email"  style="text-align: center;" class="form-control" name="email" placeholder="Enter Your E-mail here" wire:model="email">
                </div>
                
            
            <div>
                <button type="submit" class="btn btn-medium">Subscribe Now</button>
            </div>

        </form>
        </div>
</main>
</div>


