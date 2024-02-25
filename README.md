# SCSS flex grid with masonry
A 12-column flex grid
## Usage

### Grid
In order to create flex columns add the class **grid** to the parent element of the columns
example
```html
<div class="grid">
	<!-- Your columns here  -->
</div>
```
### Columns
The Columns can have 7 breakpoints
- `.col-` ( default )
- `.col-sm` ( greater than 576px )
- `.col-md` ( greater than 768px )
- `.col-lg` ( greater than 992px )
- `.col-xl` ( greater than 1200px )
- `.col-xxl` ( greater than 1600px )
- `.col-3xl` ( greater than 2200px )

And 12 sizes. With conjuction with the above sizes with can create something like:
```html
<div class="grid">
	<!-- Column 1 -->
	<div class="col-12 col-md-6 col-xl-4">
		<!-- Some content here -->
	</div>
	<!-- Column 2 -->
	<div class="col-12 col-md-6 col-xl-4">
		<!-- Some content here -->
	</div>
	<!-- Column 3 -->
	<div class="col-12 col-md-6 col-xl-4">
		<!-- Some content here -->
	</div>
</div>
```
The above example will create a grid that will have: 
- 1 column in one row for devices less than 768px
- 2 columns in one row for devices larger than 768px
- 3 columns in one row for devices larger than 1200px
