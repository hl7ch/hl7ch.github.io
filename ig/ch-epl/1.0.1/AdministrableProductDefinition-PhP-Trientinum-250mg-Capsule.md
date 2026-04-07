# PhP Trientinum-150mg-Tablet - CH EPL (R5) v1.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PhP Trientinum-150mg-Tablet**

## Example AdministrableProductDefinition: PhP Trientinum-150mg-Tablet

Profile: [AdministrableProductDefinition](StructureDefinition-ch-idmp-administrableproductdefinition.md)

**status**: Active

**formOf**: [MedicinalProductDefinition: extension = Capsule, hard; identifier = http://fhir.ch/ig/ch-epl/sid/mpid#Medical Product Identifier#CH-01100828-0674310010000; indication = Zur Behandlung der Kupferspeicherkrankheit (Morbus Wilson) bei Patienten, die eine Behandlung mit D-Penicillamin nicht vertragen.; legalStatusOfSupply = Medicinal product subject to medical or veterinary prescription (B); additionalMonitoringIndicator = No Warning; pediatricUseIndicator = Authorised for the treatment in children; classification = trientine,NA KAS art. 12 para. 5 TPLO,Synthetic,Originator product,07. STOFFWECHSEL,07.99. Varia](MedicinalProductDefinition-Triogen-250mg-Capsule.md)

**administrableDoseForm**: Capsule, hard

**unitOfPresentation**: Capsule

### RouteOfAdministrations

| | |
| :--- | :--- |
| - | **Code** |
| * | Oral use |



## Resource Content

```json
{
  "resourceType" : "AdministrableProductDefinition",
  "id" : "PhP-Trientinum-250mg-Capsule",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-administrableproductdefinition"]
  },
  "status" : "active",
  "formOf" : [{
    "reference" : "MedicinalProductDefinition/Triogen-250mg-Capsule"
  }],
  "administrableDoseForm" : {
    "coding" : [{
      "system" : "http://standardterms.edqm.eu",
      "code" : "10210000",
      "display" : "Capsule, hard"
    }]
  },
  "unitOfPresentation" : {
    "coding" : [{
      "system" : "http://standardterms.edqm.eu",
      "code" : "15012000",
      "display" : "Capsule"
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
