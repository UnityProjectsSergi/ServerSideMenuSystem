<?php

use Illuminate\Database\Seeder;

class GameObject extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('game_objects')->insert([
            'namePrefab' => "Cube(Clone)",
            'pathPrefab' => "Prefabs\ObjectsScene",
            'positionJson' => '{
                "x": 2.0,
                "y": 5.0,
                "z": 0.0,
                "normalized": {
                  "x": 0.371390671,
                  "y": 0.9284767,
                  "z": 0.0,
                  "magnitude": 1.0,
                  "sqrMagnitude": 1.0
                },
                "magnitude": 5.38516474,
                "sqrMagnitude": 29.0
              }',
            'rotationJson' => '{
                "x": 0.0,
                "y": 0.0,
                "z": 0.0,
                "w": 1.0,
                "eulerAngles": {
                  "x": 0.0,
                  "y": 0.0,
                  "z": 0.0,
                  "magnitude": 0.0,
                  "sqrMagnitude": 0.0
                }
              }',
            'scaleJson' => '{
                "x": 1.0,
                "y": 1.0,
                "z": 1.0,
                "normalized": {
                  "x": 0.577350259,
                  "y": 0.577350259,
                  "z": 0.577350259,
                  "magnitude": 1.0,
                  "sqrMagnitude": 0.99999994
                },
                "magnitude": 1.73205078,
                "sqrMagnitude": 3.0
              }',
            'isActive' => true,
            'layerMask' => '{"value":1}',
            'tag' => 'Untagged',
            'isStatic' => false,
            'slot_id'=>1
        ]); DB::table('game_objects')->insert([
          'namePrefab' => "Cube(Clone)",
          'pathPrefab' => "Prefabs\ObjectsScene",
          'positionJson' => '{
              "x": 2.0,
              "y": 5.0,
              "z": 0.0,
              "normalized": {
                "x": 0.371390671,
                "y": 0.9284767,
                "z": 0.0,
                "magnitude": 1.0,
                "sqrMagnitude": 1.0
              },
              "magnitude": 5.38516474,
              "sqrMagnitude": 29.0
            }',
          'rotationJson' => '{
              "x": 0.0,
              "y": 0.0,
              "z": 0.0,
              "w": 1.0,
              "eulerAngles": {
                "x": 0.0,
                "y": 0.0,
                "z": 0.0,
                "magnitude": 0.0,
                "sqrMagnitude": 0.0
              }
            }',
          'scaleJson' => '{
              "x": 1.0,
              "y": 1.0,
              "z": 1.0,
              "normalized": {
                "x": 0.577350259,
                "y": 0.577350259,
                "z": 0.577350259,
                "magnitude": 1.0,
                "sqrMagnitude": 0.99999994
              },
              "magnitude": 1.73205078,
              "sqrMagnitude": 3.0
            }',
          'isActive' => true,
          'layerMask' => '{"value":1}',
          'tag' => 'Untagged',
          'isStatic' => false,
          'slot_id'=>2,
          'staticFlag'=>0,
      ]);
    }
}
