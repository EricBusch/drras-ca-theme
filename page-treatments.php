<?php get_header(); ?>

<!-- Hero -->
<div class="relative w-full overflow-hidden">
	<div class="bg-gray-900">
		<div class="relative px-8 py-10 mx-auto max-w-7xl">
			<div
				class="absolute top-0 right-0 hidden w-full h-full -ml-32 transform scale-100 translate-x-1/2 translate-y-20 bg-gray-800 md:block -rotate-12 opacity-90"></div>
			<div class="flex flex-col items-center justify-between w-full md:flex-row">
				<div
					class="flex flex-col items-start justify-center w-full py-10 md:w-1/2 md:py-16 md:pr-16">
					<h1 class="text-6xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-gray-200 via-gray-50 to-gray-400 pb-2">
						<?php drras_kses_e( drras_get_post_field( 'header_text', 'Cosmetic Treatments' ) ); ?>
					</h1>
					<p class="text-lg text-gray-400 my-7">
						<span class="">
							<?php drras_kses_e( drras_get_post_field( 'header_description', 'Dr. Rassouli specializes in surgical and non-surgical facial and neck rejuvenation to achieve a natural and desired look.' ) ); ?>
						</span>
					</p>
				</div>
				<div class="relative flex items-center justify-center w-full md:w-1/2 md:pt-0">
					<img
						src="<?php echo drras_get_acf_image_field_url( 'header_image', get_the_ID(), 'medium_large' ); ?>"
						class="relative w-full h-auto max-w-sm md:w-80 rounded-xl shadow-xl aspect-square object-cover saturate-[.85]"
						alt="Cosmetic surgical treatments in Owen Sound, Ontario">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /Hero -->

<!-- Treatments -->
<section class="py-12 lg:py-24">
	<div class="max-w-7xl mx-auto px-8 w-full grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-12">

		<!-- Surgical Treatments -->
		<div class="flex flex-col">
			<h2 class="font-bold text-3xl">
				<?php drras_kses_e( drras_get_post_field( 'surgical_treatments_section_surgical_treatment_heading', 'Surgical Treatments---' ) ); ?>
			</h2>
			<div class="prose-lg mt-1 mb-6">
				<?php drras_kses_e( drras_get_post_field( 'surgical_treatments_section_surgical_treatment_description', 'The following surgical treatments are performed by Dr. Alipasha Rassouli. Contact Dr. Rassouli for more information.---' ) ); ?>
			</div>
			<div class="flex flex-col space-y-8">
				<?php foreach ( drras_get_surgical_treatments() as $treatment ) : ?>
					<?php get_template_part( 'template-parts/surgicaltreatment', 'card', compact( 'treatment' ) ); ?>
				<?php endforeach; ?>
			</div>
		</div>

		<!-- Non-surgical Treatments -->
		<div class="flex flex-col">
			<h2 class="font-bold text-3xl">
				<?php drras_kses_e( drras_get_post_field( 'non_surgical_treatments_section_non_surgical_treatment_heading', 'Non-surgical Treatments---' ) ); ?>
			</h2>
			<div class="prose-lg mt-1 mb-6">
				<?php drras_kses_e( drras_get_post_field( 'non_surgical_treatments_section_non_surgical_treatment_description', 'The following non-surgical treatments are performed by the Profile Medical Cosmetics team. Visit ProfileMC.ca for more information.---' ) ); ?>
			</div>
			<div class="flex flex-col space-y-8">
				<?php foreach ( drras_get_nonsurgical_treatments() as $treatment ) : ?>
					<?php get_template_part( 'template-parts/nonsurgicaltreatment', 'card', compact( 'treatment' ) ); ?>
				<?php endforeach; ?>
			</div>
		</div>

	</div>
</section>
<!-- /Treatments -->

<?php get_footer(); ?>
