<?php

namespace Database\Seeders;

use App\Models\Step;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Step::factory()->create([
            'description' => 'Whisk lemon zest, lemon juice, oil, garlic, ground pepper and 3/4 teaspoon salt together in a medium nonreactive bowl until emulsified, about 30 seconds. Add salmon; toss until evenly coated. Let the salmon marinate, uncovered, at room temperature for 15 minutes.',
            'recipe_id' => 1,
        ]);

        Step::factory()->create([
            'description' => 'Position oven rack 4 inches from heat source; preheat broiler. Line a broiler-safe baking sheet with foil. Arrange the salmon pieces in an even layer on the prepared baking sheet; drizzle the remaining marinade over the salmon. Sprinkle evenly with the remaining 1/4 teaspoon salt. Place lemon wedges on the baking sheet, if using.',
            'recipe_id' => 1,
        ]);

        Step::factory()->create([
            'description' => 'Broil until an instant-read thermometer inserted into the thickest portion registers 145°F, 5 to 7 minutes. Using tongs, transfer the salmon pieces to a serving platter. If using, squeeze the broiled lemon wedges over the salmon. Sprinkle with parsley. Garnish with additional ground pepper, if desired.',
            'recipe_id' => 1,
        ]);

        Step::factory()->create([
            'description' => 'To prepare jerk marinade: Place scallions, onion, chile to taste, lime juice, oil, brown sugar, allspice, cinnamon, nutmeg, salt and thyme in a blender. Process until smooth. Place chicken thighs and breasts in a nonreactive baking dish (see Tip). Rub 2/3 cup of the marinade onto both sides of the chicken. Transfer the remaining marinade to a small bowl; cover and refrigerate. Marinate the chicken in the refrigerator for 2 to 24 hours.',
            'recipe_id' => 2,
        ]);

        Step::factory()->create([
            'description' => "Twenty minutes before you're ready to grill, soak wood chips (if using) in a bowl of water. (No grill? See broiler variation.)",
            'recipe_id' => 2,
        ]);

        Step::factory()->create([
            'description' => "Fold a 12-by-20-inch piece of heavy-duty foil in half to create a 12-by-10-inch double-thick piece. Transfer the wet wood chips to the center of the foil, allowing as much water as possible to drip back into the bowl. Create a packet by folding the short ends of the foil over the wood chips and sealing the open sides. Make 6 holes in the top of the foil packet with a skewer or the tip of a knife.",
            'recipe_id' => 2,
        ]);

        Step::factory()->create([
            'description' => "Place the packet of wood chips, pierced-side up, under the grill rack on top of the burners. Close the lid. Heat the grill to medium-high until the chips in the packet smell smoky and smoke begins to billow from under the lid, about 15 minutes. (Don't worry if the packet temporarily catches on fire.) Grill the chicken, turning and basting with the reserved marinade occasionally (discard any unused marinade), until just cooked through, 20 to 30 minutes total, depending on the size.",
            'recipe_id' => 2,
        ]);

}
}