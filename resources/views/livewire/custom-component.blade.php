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
            <label class="form-label" for="address">Flavour:</label>
            <select name="city" id="city">
                <option value="">--Select-Flavour--</option>
                <option value="choclate cake">Chocolate Cake</option>
                <option value="vanilla cake">Vanilla Cake</option>
                <option value="strawberry cake">Strawberry Cake</option>
            </select>
        </div>

        <div class="form-group">
            <label class="form-label" for="address">Shape</label>
            <select name="city" id="city">
                <option value="">--Select-Shape--</option>
                <option value="round">Round</option>
                <option value="square">Square</option>
                <option value="rectangle">Rectangle</option>
            </select>
            <div>

        <div class="form-group">
            <label class="form-label" for="address">Eggless</label>
            <select name="city" id="city">
                <option value="">--Select-Egg--</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
            <div>

                <div class="form-group">
                    <label class="form-label" for="property_title">Message on Cake</label>
                    <input style="text-align: center;"type="text" class="form-control" name="message" id="message" value=""
                        placeholder="Enter Your Message">
                </div>

                <div class="form-group">
                    <label class="form-label" for="property_title">Note</label>
                    <input type="text" class="form-control" name="note" id="note" value=""
                        placeholder="Enter Your Note here">
                </div>
                <label for="upload_image">Upload Image</label>
                <input type="file">
            </div>
            <div>
                <button type="submit" class="btn btn-medium">Submit</button>
            </div>
        </div>
</main>