# PackagedProductDefinition - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PackagedProductDefinition**

## Resource Profile: PackagedProductDefinition 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-packagedproductdefinition | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:CHIDMPPackagedProductDefinition |
| **Copyright/Legal**: CC0-1.0 | |

 
Profile of the PackagedProductDefinition resource for representing a medically related item or items, in a container or package. 

**Usages:**

* Use this Profile: [Bundle](StructureDefinition-ch-idmp-bundle.md)
* Refer to this Profile: [PackagedProductDefinition](StructureDefinition-ch-idmp-packagedproductdefinition.md) and [RegulatedAuthorization](StructureDefinition-ch-idmp-regulatedauthorization.md)
* Examples for this Profile: [PackagedProductDefinition/PMP-Comprehensive-Sample-Combipack](PackagedProductDefinition-PMP-Comprehensive-Sample-Combipack.md), [PackagedProductDefinition/PMP-Enfortumabum-vedotinum-20-Powder](PackagedProductDefinition-PMP-Enfortumabum-vedotinum-20-Powder.md), [PackagedProductDefinition/PMP-Enfortumabum-vedotinum-30-Powder](PackagedProductDefinition-PMP-Enfortumabum-vedotinum-30-Powder.md) and [PackagedProductDefinition/PMP-Gilteritinibi-hemifumaras-40-Filmcoatedtablet](PackagedProductDefinition-PMP-Gilteritinibi-hemifumaras-40-Filmcoatedtablet.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-idmp|current/StructureDefinition/StructureDefinition-ch-idmp-packagedproductdefinition.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-idmp-packagedproductdefinition.csv), [Excel](StructureDefinition-ch-idmp-packagedproductdefinition.xlsx), [Schematron](StructureDefinition-ch-idmp-packagedproductdefinition.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-idmp-packagedproductdefinition",
  "url" : "http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-packagedproductdefinition",
  "version" : "1.0.0-ballot",
  "name" : "CHIDMPPackagedProductDefinition",
  "title" : "PackagedProductDefinition",
  "status" : "active",
  "date" : "2026-06-12T16:14:23+00:00",
  "publisher" : "Refdata Foundation",
  "contact" : [{
    "name" : "Refdata Foundation",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.refdata.ch/de/"
    }]
  }],
  "description" : "Profile of the PackagedProductDefinition resource for representing a medically related item or items, in a container or package.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "5.0.0",
  "mapping" : [{
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  },
  {
    "identity" : "idmp",
    "uri" : "https://www.iso.org/obp/ui/#iso:std:iso:11615",
    "name" : "IDMP Mapping"
  },
  {
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "PackagedProductDefinition",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/PackagedProductDefinition",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "PackagedProductDefinition",
      "path" : "PackagedProductDefinition",
      "short" : "PackagedProductDefinition"
    },
    {
      "id" : "PackagedProductDefinition.packageFor",
      "path" : "PackagedProductDefinition.packageFor",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-medicinalproductdefinition"]
      }]
    },
    {
      "id" : "PackagedProductDefinition.marketingStatus.country",
      "path" : "PackagedProductDefinition.marketingStatus.country",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH"
        }]
      }
    },
    {
      "id" : "PackagedProductDefinition.marketingStatus.status",
      "path" : "PackagedProductDefinition.marketingStatus.status",
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://fhir.ch/ig/ch-idmp/ValueSet/ch-Refdata-marketing-status"
      }
    },
    {
      "id" : "PackagedProductDefinition.marketingStatus.status.coding",
      "path" : "PackagedProductDefinition.marketingStatus.status.coding",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "system"
        }],
        "rules" : "open"
      }
    },
    {
      "id" : "PackagedProductDefinition.marketingStatus.status.coding:SMC",
      "path" : "PackagedProductDefinition.marketingStatus.status.coding",
      "sliceName" : "SMC",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "PackagedProductDefinition.marketingStatus.status.coding:SMC.system",
      "path" : "PackagedProductDefinition.marketingStatus.status.coding.system",
      "min" : 1,
      "patternUri" : "http://fhir.ch/ig/ch-idmp/CodeSystem/ch-SMC-marketing-status"
    },
    {
      "id" : "PackagedProductDefinition.marketingStatus.status.coding:Refdata",
      "path" : "PackagedProductDefinition.marketingStatus.status.coding",
      "sliceName" : "Refdata",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "PackagedProductDefinition.marketingStatus.status.coding:Refdata.system",
      "path" : "PackagedProductDefinition.marketingStatus.status.coding.system",
      "min" : 1,
      "patternUri" : "http://fhir.ch/ig/ch-idmp/CodeSystem/ch-Refdata-marketing-status"
    },
    {
      "id" : "PackagedProductDefinition.packaging.type",
      "path" : "PackagedProductDefinition.packaging.type",
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://fhir.ch/ig/ch-idmp/ValueSet/edqm-packaging"
      }
    },
    {
      "id" : "PackagedProductDefinition.packaging.shelfLifeStorage.specialPrecautionsForStorage.coding",
      "path" : "PackagedProductDefinition.packaging.shelfLifeStorage.specialPrecautionsForStorage.coding",
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://fhir.ch/ig/ch-idmp/ValueSet/ch-SMC-special-precautions-for-storage"
      }
    },
    {
      "id" : "PackagedProductDefinition.packaging.property.value[x]",
      "path" : "PackagedProductDefinition.packaging.property.value[x]",
      "min" : 1
    },
    {
      "id" : "PackagedProductDefinition.packaging.containedItem.item",
      "path" : "PackagedProductDefinition.packaging.containedItem.item",
      "type" : [{
        "code" : "CodeableReference",
        "targetProfile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-manufactureditemdefinition",
        "http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-packagedproductdefinition"]
      }]
    },
    {
      "id" : "PackagedProductDefinition.packaging.packaging",
      "path" : "PackagedProductDefinition.packaging.packaging",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "PackagedProductDefinition.packaging.packaging.type",
      "path" : "PackagedProductDefinition.packaging.packaging.type",
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://fhir.ch/ig/ch-idmp/ValueSet/edqm-packaging"
      }
    },
    {
      "id" : "PackagedProductDefinition.packaging.packaging.packaging",
      "path" : "PackagedProductDefinition.packaging.packaging.packaging",
      "type" : [{
        "code" : "BackboneElement"
      }]
    },
    {
      "id" : "PackagedProductDefinition.packaging.packaging.packaging.type",
      "path" : "PackagedProductDefinition.packaging.packaging.packaging.type",
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://fhir.ch/ig/ch-idmp/ValueSet/edqm-packaging"
      }
    }]
  }
}

```
