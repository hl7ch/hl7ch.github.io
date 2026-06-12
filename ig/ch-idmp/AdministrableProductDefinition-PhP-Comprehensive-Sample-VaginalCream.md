# PhP Clindamycin-20-Vaginal Cream - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PhP Clindamycin-20-Vaginal Cream**

## Example AdministrableProductDefinition: PhP Clindamycin-20-Vaginal Cream

Profile: [AdministrableProductDefinition](StructureDefinition-ch-idmp-administrableproductdefinition.md)

**status**: Active

**formOf**: [MedicinalProductDefinition: extension = Cream + Pessary; identifier = http://fhir.ch/ig/ch-idmp/sid/mpid#Medical Product Identifier#CH-11111111-1234560010000; combinedPharmaceuticalDoseForm = Cream + Pessary; indication = Comprehensive Sample Combipack wird angewendet zur Behandlung der bakteriellen Vaginose (früher bezeichnet als Haemophilus-Vaginitis, Gardnerella-Vaginitis, unspezifische Vaginitis, Corynebacterium-Vaginitis oder anaerobe Vaginose); legalStatusOfSupply = D: Dispensed following expert advice; additionalMonitoringIndicator = No Warning; pediatricUseIndicator = Not authorised for the treatment in children; classification = nystatin,NA NAS,Synthetic](MedicinalProductDefinition-Comprehensive-Sample-Combipack.md)

**administrableDoseForm**: Vaginal Cream

**unitOfPresentation**: Tube

### RouteOfAdministrations

| | |
| :--- | :--- |
| - | **Code** |
| * | Vaginal use |



## Resource Content

```json
{
  "resourceType" : "AdministrableProductDefinition",
  "id" : "PhP-Comprehensive-Sample-VaginalCream",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-administrableproductdefinition"]
  },
  "status" : "active",
  "formOf" : [{
    "reference" : "MedicinalProductDefinition/Comprehensive-Sample-Combipack"
  }],
  "administrableDoseForm" : {
    "coding" : [{
      "system" : "http://standardterms.edqm.eu",
      "code" : "10901000",
      "display" : "Vaginal Cream"
    }]
  },
  "unitOfPresentation" : {
    "coding" : [{
      "system" : "http://standardterms.edqm.eu",
      "code" : "15058000",
      "display" : "Tube"
    }]
  },
  "routeOfAdministration" : [{
    "code" : {
      "coding" : [{
        "system" : "http://standardterms.edqm.eu",
        "code" : "20072000",
        "display" : "Vaginal use"
      }]
    }
  }]
}

```
