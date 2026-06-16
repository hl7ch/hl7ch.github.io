# Medication Aspirin - CH UMZH Connect IG (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Medication Aspirin**

## Example Medication: Medication Aspirin

Profile: [CH Core Medication](http://fhir.ch/ig/ch-core/7.0.0-ballot/StructureDefinition-ch-core-medication.html)

**code**: Aspirin (Filmtabl 100 mg)

**form**: Filmtablette

### Ingredients

| | |
| :--- | :--- |
| - | **Item[x]** |
| * | Acetylsalicylic acid |



## Resource Content

```json
{
  "resourceType" : "Medication",
  "id" : "MedAspirin",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-medication"]
  },
  "code" : {
    "coding" : [{
      "system" : "http://www.whocc.no/atc",
      "code" : "B01AC06",
      "display" : "Acetylsalicylic acid"
    }],
    "text" : "Aspirin (Filmtabl 100 mg)"
  },
  "form" : {
    "coding" : [{
      "system" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
      "code" : "10221000",
      "display" : "Filmtablette"
    }],
    "text" : "Filmtablette"
  },
  "ingredient" : [{
    "itemCodeableConcept" : {
      "coding" : [{
        "system" : "http://snomed.info/sct",
        "code" : "387458008",
        "display" : "Aspirin (substance)"
      }],
      "text" : "Acetylsalicylic acid"
    }
  }]
}

```
