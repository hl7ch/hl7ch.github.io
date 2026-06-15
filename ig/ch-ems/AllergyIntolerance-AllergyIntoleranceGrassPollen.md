# Allergy Grass Pollen - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Allergy Grass Pollen**

## Example AllergyIntolerance: Allergy Grass Pollen

**clinicalStatus**: Active

**type**: Allergy

**code**: Allergie auf Gräser Pollen

**patient**: [Patricia Muster (official) Female, DoB: 1999-11-11 ( urn:oid:2.16.756.5.32#AHVN13#7562295883070)](Patient-PatientExample.md)

**encounter**: [Encounter: extension = wedding ring,billfold,pickup by EMS,; identifier = Einsatznummer: S89898989; status = finished; class = emergency (ActCode#EMER); serviceType = primary mission; priority = with siren; period = 2016-12-10 --> (ongoing); reasonCode = emergency mission](Encounter-EncounterExample.md)



## Resource Content

```json
{
  "resourceType" : "AllergyIntolerance",
  "id" : "AllergyIntoleranceGrassPollen",
  "clinicalStatus" : {
    "coding" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/allergyintolerance-clinical",
      "code" : "active",
      "display" : "Active"
    }]
  },
  "type" : "allergy",
  "code" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "code" : "418689008",
      "display" : "Allergy to grass pollen (finding)"
    }],
    "text" : "Allergie auf Gräser Pollen"
  },
  "patient" : {
    "reference" : "Patient/PatientExample"
  },
  "encounter" : {
    "reference" : "Encounter/EncounterExample"
  }
}

```
