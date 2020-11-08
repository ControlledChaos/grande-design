<?php
/**
 * SCallback for the Schema organization type field.
 *
 * @package    Grande_Design
 * @subpackage Admin\Partials\Field_Callbacks
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace Grande_Design\Admin\Partials\Field_Callbacks;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

$types = [

	// First option save null.
	null          => __( 'Select one&hellip;', 'grande-design' ),
	'Airline'     => __( 'Airline', 'grande-design' ),
	'Corporation' => __( 'Corporation', 'grande-design' ),

	// Educational Organizations.
	'EducationalOrganization' => __( 'Educational Organization', 'grande-design' ),
		'CollegeOrUniversity' => __( '— College or University', 'grande-design' ),
		'ElementarySchool'    => __( '— Elementary School', 'grande-design' ),
		'HighSchool'          => __( '— High School', 'grande-design' ),
		'MiddleSchool'        => __( '— Middle School', 'grande-design' ),
		'Preschool'           => __( '— Preschool', 'grande-design' ),
		'School'              => __( '— School', 'grande-design' ),

	'GovernmentOrganization'  => __( 'Government Organization', 'grande-design' ),

	// Local Businesses.
	'LocalBusiness' => __( 'Local Business', 'grande-design' ),
		'AnimalShelter' => __( '— Animal Shelter', 'grande-design' ),

		// Automotive Businesses.
		'AutomotiveBusiness' => __( '— Automotive Business', 'grande-design' ),
			'AutoBodyShop'     => __( '—— Auto Body Shop', 'grande-design' ),
			'AutoDealer'       => __( '—— Auto Dealer', 'grande-design' ),
			'AutoPartsStore'   => __( '—— Auto Parts Store', 'grande-design' ),
			'AutoRental'       => __( '—— Auto Rental', 'grande-design' ),
			'AutoRepair'       => __( '—— Auto Repair', 'grande-design' ),
			'AutoWash'         => __( '—— Auto Wash', 'grande-design' ),
			'GasStation'       => __( '—— Gas Station', 'grande-design' ),
			'MotorcycleDealer' => __( '—— Motorcycle Dealer', 'grande-design' ),
			'MotorcycleRepair' => __( '—— Motorcycle Repair', 'grande-design' ),

		'ChildCare'            => __( '— Child Care', 'grande-design' ),
		'Dentist'              => __( '— Dentist', 'grande-design' ),
		'DryCleaningOrLaundry' => __( '— Dry Cleaning or Laundry', 'grande-design' ),

		// Emergency Services.
		'EmergencyService' => __( '— Emergency Service', 'grande-design' ),
			'FireStation'   => __( '—— Fire Station', 'grande-design' ),
			'Hospital'      => __( '—— Hospital', 'grande-design' ),
			'PoliceStation' => __( '—— Police Station', 'grande-design' ),

		'EmploymentAgency' => __( '— Employment Agency', 'grande-design' ),

		// Entertainment Businesses.
		'EntertainmentBusiness' => __( '— Entertainment Business', 'grande-design' ),
			'AdultEntertainment' => __( '—— Adult Entertainment', 'grande-design' ),
			'AmusementPark'      => __( '—— Amusement Park', 'grande-design' ),
			'ArtGallery'         => __( '—— Art Gallery', 'grande-design' ),
			'Casino'             => __( '—— Casino', 'grande-design' ),
			'ComedyClub'         => __( '—— Comedy Club', 'grande-design' ),
			'MovieTheater'       => __( '—— Movie Theater', 'grande-design' ),
			'NightClub'          => __( '—— Night Club', 'grande-design' ),

		// Financial Services.
		'FinancialService' => __( '— Financial Service', 'grande-design' ),
			'AccountingService' => __( '—— Accounting Service', 'grande-design' ),
			'AutomatedTeller'   => __( '—— Automated Teller', 'grande-design' ),
			'BankOrCreditUnion' => __( '—— Bank or Credit Union', 'grande-design' ),
			'InsuranceAgency'   => __( '—— Insurance Agency', 'grande-design' ),

		// Food Establishments.
		'FoodEstablishment' => __( '— Food Establishment', 'grande-design' ),
			'Bakery'             => __( '—— Bakery', 'grande-design' ),
			'BarOrPub'           => __( '—— Bar or Pub', 'grande-design' ),
			'Brewery'            => __( '—— Brewery', 'grande-design' ),
			'CafeOrCoffeeShop'   => __( '—— Cafe or Coffee Shop', 'grande-design' ),
			'FastFoodRestaurant' => __( '—— Fast Food Restaurant', 'grande-design' ),
			'IceCreamShop'       => __( '—— Ice Cream Shop', 'grande-design' ),
			'Restaurant'         => __( '—— Restaurant', 'grande-design' ),
			'Winery'             => __( '—— Winery', 'grande-design' ),

		// Government Offices.
		'GovernmentOffice' => __( '— Government Office', 'grande-design' ),
			'PostOffice' => __( '—— Post Office', 'grande-design' ),

		// Health and Beauty Businesses.
		'HealthAndBeautyBusiness' => __( '— Health and Beauty Business', 'grande-design' ),
			'BeautySalon'  => __( '—— Beauty Salon', 'grande-design' ),
			'DaySpa'       => __( '—— Day Spa', 'grande-design' ),
			'HairSalon'    => __( '—— Hair Salon', 'grande-design' ),
			'HealthClub'   => __( '—— Health Club', 'grande-design' ),
			'NailSalon'    => __( '—— Nail Salon', 'grande-design' ),
			'TattooParlor' => __( '—— Tattoo Parlor', 'grande-design' ),

		// Home and Construction Businesses.
		'HomeAndConstructionBusiness' => __( '— Home and Construction Business', 'grande-design' ),
			'Electrician'       => __( '—— Electrician', 'grande-design' ),
			'GeneralContractor' => __( '—— General Contractor', 'grande-design' ),
			'HVACBusiness'      => __( '—— HVAC Business', 'grande-design' ),
			'HousePainter'      => __( '—— House Painter', 'grande-design' ),
			'Locksmith'         => __( '—— Locksmith', 'grande-design' ),
			'MovingCompany'     => __( '—— MovingCompany', 'grande-design' ),
			'Plumber'           => __( '—— Plumber', 'grande-design' ),
			'RoofingContractor' => __( '—— Roofing Contractor', 'grande-design' ),

		'InternetCafe' => __( '— Internet Cafe', 'grande-design' ),

		// Legal Services.
		'LegalService' => __( '— Legal Service', 'grande-design' ),
			'Attorney' => __( '—— Attorney', 'grande-design' ),
			'Notary'   => __( '—— Notary', 'grande-design' ),

		'Library' => __( '— Library', 'grande-design' ),

		// Lodging Businesses.
		'LodgingBusiness' => __( '— Lodging Business', 'grande-design' ),
			'BedAndBreakfast' => __( '—— Bed and Breakfast', 'grande-design' ),
			'Campground'      => __( '—— Campground', 'grande-design' ),
			'Hostel'          => __( '—— Hostel', 'grande-design' ),
			'Hotel'           => __( '—— Hotel', 'grande-design' ),
			'Motel'           => __( '—— Motel', 'grande-design' ),
			'Resort'          => __( '—— Resort', 'grande-design' ),

		'ProfessionalService' => __( '— Professional Service', 'grande-design' ),
		'RadioStation'        => __( '— Radio Station', 'grande-design' ),
		'RealEstateAgent'     => __( '— Real Estate Agent', 'grande-design' ),
		'RecyclingCenter'     => __( '— Recycling Center', 'grande-design' ),
		'SelfStorage'         => __( '— Self Storage', 'grande-design' ),
		'ShoppingCenter'      => __( '— Shopping Center', 'grande-design' ),

		// Sports Activity Locations.
		'SportsActivityLocation' => __( '— Sports Activity Location', 'grande-design' ),
			'BowlingAlley'       => __( '—— Bowling Alley', 'grande-design' ),
			'ExerciseGym'        => __( '—— Exercise Gym', 'grande-design' ),
			'GolfCourse'         => __( '—— Golf Course', 'grande-design' ),
			'HealthClub'         => __( '—— Health Club', 'grande-design' ),
			'PublicSwimmingPool' => __( '—— Public Swimming Pool', 'grande-design' ),
			'SkiResort'          => __( '—— Ski Resort', 'grande-design' ),
			'SportsClub'         => __( '—— Sports Club', 'grande-design' ),
			'StadiumOrArena'     => __( '—— Stadium or Arena', 'grande-design' ),
			'TennisComplex'      => __( '—— Tennis Complex', 'grande-design' ),

		// Store types.
		'Store' => __( '— Store', 'grande-design' ),
			'AutoPartsStore'      => __( '—— Auto Parts Store', 'grande-design' ),
			'BikeStore'           => __( '—— Bike Store', 'grande-design' ),
			'BookStore'           => __( '—— Book Store', 'grande-design' ),
			'ClothingStore'       => __( '—— Clothing Store', 'grande-design' ),
			'ComputerStore'       => __( '—— Computer Store', 'grande-design' ),
			'ConvenienceStore'    => __( '—— Convenience Store', 'grande-design' ),
			'DepartmentStore'     => __( '—— Department Store', 'grande-design' ),
			'ElectronicsStore'    => __( '—— Electronics Store', 'grande-design' ),
			'Florist'             => __( '—— Florist', 'grande-design' ),
			'FurnitureStore'      => __( '—— Furniture Store', 'grande-design' ),
			'GardenStore'         => __( '—— Garden Store', 'grande-design' ),
			'GroceryStore'        => __( '—— Grocery Store', 'grande-design' ),
			'HardwareStore'       => __( '—— Hardware Store', 'grande-design' ),
			'HobbyShop'           => __( '—— Hobby Shop', 'grande-design' ),
			'HomeGoodsStore'      => __( '—— Home Goods Store', 'grande-design' ),
			'JewelryStore'        => __( '—— Jewelry Store', 'grande-design' ),
			'LiquorStore'         => __( '—— Liquor Store', 'grande-design' ),
			'MensClothingStore'   => __( '—— Mens Clothing Store', 'grande-design' ),
			'MobilePhoneStore'    => __( '—— Mobile Phone Store', 'grande-design' ),
			'MovieRentalStore'    => __( '—— Movie Rental Store', 'grande-design' ),
			'MusicStore'          => __( '—— Music Store', 'grande-design' ),
			'OfficeEquipmentStore'=> __( '—— Office Equipment Store', 'grande-design' ),
			'OutletStore'         => __( '—— Outlet Store', 'grande-design' ),
			'PawnShop'            => __( '—— Pawn Shop', 'grande-design' ),
			'PetStore'            => __( '—— Pet Store', 'grande-design' ),
			'ShoeStore'           => __( '—— Shoe Store', 'grande-design' ),
			'SportingGoodsStore'  => __( '—— Sporting Goods Store', 'grande-design' ),
			'TireShop'            => __( '—— Tire Shop', 'grande-design' ),
			'ToyStore'            => __( '—— Toy Store', 'grande-design' ),
			'WholesaleStore'      => __( '—— Wholesale Store', 'grande-design' ),

		'TelevisionStation'        => __( '— Television Station', 'grande-design' ),
		'TouristInformationCenter' => __( '— Tourist Information Center', 'grande-design' ),
		'TravelAgency'             => __( '— Travel Agency', 'grande-design' ),

	'MedicalOrganization' => __( 'Medical Organization', 'grande-design' ),
	'NGO'                 => __( 'NGO (Non-Governmental Organization', 'grande-design' ),
	'PerformingGroup'     => __( 'Performing Group', 'grande-design' ),
	'SportsOrganization'  => __( 'Sports Organization', 'grande-design' )
];

$options = get_option( 'schema_org_type' );

$html = '<p><select id="schema_org_type" name="schema_org_type">';

foreach( $types as $type => $value ) {

	$selected = ( $options == $type ) ? 'selected="' . esc_attr( 'selected' ) . '"' : '';

	$html .= '<option value="' . esc_attr( $type ) . '" ' . $selected . '>' . esc_html( $value ) . '</option>';

}

$html .= '</select>';
$html .= sprintf(
	'<label for="schema_org_type"> %1s</label> <a href="%2s" target="_blank" class="tooltip" title="%3s"><span class="dashicons dashicons-editor-help"></span></a>',
	$args[0],
	esc_attr( esc_url( 'https://schema.org/docs/full.html#C.Organization' ) ),
	esc_attr( __( 'Read documentation for organization types', 'grande-design' ) )
);
$html .= '</p>';

echo $html;