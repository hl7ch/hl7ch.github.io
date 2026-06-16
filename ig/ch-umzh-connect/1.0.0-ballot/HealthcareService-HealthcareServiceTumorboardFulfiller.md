# HealthcareService Sarcoma Tumor Board Fulfiller - CH UMZH Connect IG (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **HealthcareService Sarcoma Tumor Board Fulfiller**

## Example HealthcareService: HealthcareService Sarcoma Tumor Board Fulfiller

**active**: true

**providedBy**: [http://registry.example.org/fhir/Organization/Fulfiller](http://registry.example.org/fhir/Organization/Fulfiller)

**type**: Cancer care review (procedure)

**name**: Sarcoma Tumor Board



## Resource Content

```json
{
  "resourceType" : "HealthcareService",
  "id" : "HealthcareServiceTumorboardFulfiller",
  "active" : true,
  "providedBy" : {
    "reference" : "http://registry.example.org/fhir/Organization/Fulfiller"
  },
  "type" : [{
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "code" : "720006006",
      "display" : "Cancer care review (procedure)"
    }]
  }],
  "name" : "Sarcoma Tumor Board"
}

```
