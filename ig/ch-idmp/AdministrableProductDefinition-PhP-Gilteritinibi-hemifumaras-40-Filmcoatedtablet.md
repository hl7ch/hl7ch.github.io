# PhP Gilteritinibi-hemifumaras-40-Filmtabletten - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PhP Gilteritinibi-hemifumaras-40-Filmtabletten**

## Example AdministrableProductDefinition: PhP Gilteritinibi-hemifumaras-40-Filmtabletten

Profile: [AdministrableProductDefinition](StructureDefinition-ch-idmp-administrableproductdefinition.md)

**status**: Active

**formOf**: [MedicinalProductDefinition: extension = Film-coated tablet; identifier = http://fhir.ch/ig/ch-idmp/sid/mpid#Medical Product Identifier#CH-01100869-0672110010000; indication = Xospata wird angewendet für die Behandlung von erwachsenen Patienten, die an rezidivierter oder refraktärer akuter myeloider Leukämie (AML) mit FMS-ähnlichen Tyrosinkinase 3 (FLT3)-Mutationen leiden.; legalStatusOfSupply = A: Single dispensing requiring a medical or veterinary prescription; additionalMonitoringIndicator = No Warning; pediatricUseIndicator = Not authorised for the treatment in children; classification = gilteritinib,Synthetic](MedicinalProductDefinition-Xospata-Filmcoatedtablet.md)

**administrableDoseForm**: Film-coated tablet

**unitOfPresentation**: Tablet

### RouteOfAdministrations

| | |
| :--- | :--- |
| - | **Code** |
| * | Oral use |



## Resource Content

```json
{
  "resourceType" : "AdministrableProductDefinition",
  "id" : "PhP-Gilteritinibi-hemifumaras-40-Filmcoatedtablet",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-administrableproductdefinition"]
  },
  "status" : "active",
  "formOf" : [{
    "reference" : "MedicinalProductDefinition/Xospata-Filmcoatedtablet"
  }],
  "administrableDoseForm" : {
    "coding" : [{
      "system" : "http://standardterms.edqm.eu",
      "code" : "10221000",
      "display" : "Film-coated tablet"
    }]
  },
  "unitOfPresentation" : {
    "coding" : [{
      "system" : "http://standardterms.edqm.eu",
      "code" : "15054000",
      "display" : "Tablet"
    }]
  },
  "routeOfAdministration" : [{
    "code" : {
      "coding" : [{
        "system" : "http://standardterms.edqm.eu",
        "code" : "20053000",
        "display" : "Oral use"
      }]
    }
  }]
}

```
