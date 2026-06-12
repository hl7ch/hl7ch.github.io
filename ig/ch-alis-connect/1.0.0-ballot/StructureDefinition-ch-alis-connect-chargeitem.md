# CH ALIS ChargeItem Profile - CH ALIS Connect (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ALIS ChargeItem Profile**

## Resource Profile: CH ALIS ChargeItem Profile 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-chargeitem | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:ChAlisChargeItem |
| **Copyright/Legal**: CC0-1.0 | |

 
Base definition for the ChargeItem resource in the context of ALIS-Connect. 

**Usages:**

* This Profile is not used by any profiles in this Specification

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-alis-connect|current/StructureDefinition/StructureDefinition-ch-alis-connect-chargeitem.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-alis-connect-chargeitem.csv), [Excel](StructureDefinition-ch-alis-connect-chargeitem.xlsx), [Schematron](StructureDefinition-ch-alis-connect-chargeitem.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-alis-connect-chargeitem",
  "url" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-chargeitem",
  "version" : "1.0.0-ballot",
  "name" : "ChAlisChargeItem",
  "title" : "CH ALIS ChargeItem Profile",
  "status" : "active",
  "date" : "2026-06-12T18:35:48+00:00",
  "publisher" : "ALIS-Connect",
  "contact" : [{
    "name" : "ALIS-Connect",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.alis-connect.ch/"
    }]
  }],
  "description" : "Base definition for the ChargeItem resource in the context of ALIS-Connect.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "alis",
    "uri" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Service",
    "name" : "ALIS Mapping",
    "comment" : "ALIS Mapping"
  },
  {
    "identity" : "workflow",
    "uri" : "http://hl7.org/fhir/workflow",
    "name" : "Workflow Pattern"
  },
  {
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 v2 Mapping"
  },
  {
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  },
  {
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "ChargeItem",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/ChargeItem",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "ChargeItem",
      "path" : "ChargeItem",
      "short" : "CH ALIS ChargeItem",
      "mapping" : [{
        "identity" : "alis",
        "map" : "Service"
      }]
    },
    {
      "id" : "ChargeItem.contained",
      "path" : "ChargeItem.contained",
      "short" : "Contained Resources (Patient, Encounter, Condition)",
      "min" : 2
    },
    {
      "id" : "ChargeItem.extension",
      "path" : "ChargeItem.extension",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "url"
        }],
        "rules" : "open"
      }
    },
    {
      "id" : "ChargeItem.extension:ItemNumber",
      "path" : "ChargeItem.extension",
      "sliceName" : "ItemNumber",
      "short" : "ItemNumber",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-itemnumber"]
      }],
      "mapping" : [{
        "identity" : "alis",
        "map" : "ItemNumber"
      }]
    },
    {
      "id" : "ChargeItem.extension:RefItemNumber",
      "path" : "ChargeItem.extension",
      "sliceName" : "RefItemNumber",
      "short" : "RefItemNumber",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-refitemnumber"]
      }],
      "mapping" : [{
        "identity" : "alis",
        "map" : "RefItemNumber"
      }]
    },
    {
      "id" : "ChargeItem.extension:SessionID",
      "path" : "ChargeItem.extension",
      "sliceName" : "SessionID",
      "short" : "SessionID",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-sessionid"]
      }],
      "mapping" : [{
        "identity" : "alis",
        "map" : "SessionID"
      }]
    },
    {
      "id" : "ChargeItem.extension:OrderID",
      "path" : "ChargeItem.extension",
      "sliceName" : "OrderID",
      "short" : "OrderID",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-orderid"]
      }],
      "mapping" : [{
        "identity" : "alis",
        "map" : "OrderID"
      }]
    },
    {
      "id" : "ChargeItem.extension:OrderDate",
      "path" : "ChargeItem.extension",
      "sliceName" : "OrderDate",
      "short" : "OrderDate",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-orderdate"]
      }],
      "mapping" : [{
        "identity" : "alis",
        "map" : "OrderDate"
      }]
    },
    {
      "id" : "ChargeItem.extension:SectionCode",
      "path" : "ChargeItem.extension",
      "sliceName" : "SectionCode",
      "short" : "SectionCode",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-sectioncode"]
      }],
      "mapping" : [{
        "identity" : "alis",
        "map" : "SectionCode"
      }]
    },
    {
      "id" : "ChargeItem.extension:Form",
      "path" : "ChargeItem.extension",
      "sliceName" : "Form",
      "short" : "Form",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-form"]
      }],
      "mapping" : [{
        "identity" : "alis",
        "map" : "Form"
      }]
    },
    {
      "id" : "ChargeItem.extension:TPValue",
      "path" : "ChargeItem.extension",
      "sliceName" : "TPValue",
      "short" : "TPValue",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-tpvalue"]
      }],
      "mapping" : [{
        "identity" : "alis",
        "map" : "TPValue"
      }]
    },
    {
      "id" : "ChargeItem.extension:SessionAnnexB",
      "path" : "ChargeItem.extension",
      "sliceName" : "SessionAnnexB",
      "short" : "SessionAnnexB",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-sessionannexb"]
      }],
      "mapping" : [{
        "identity" : "alis",
        "map" : "SessionSectionB"
      }]
    },
    {
      "id" : "ChargeItem.extension:ServiceAssignment",
      "path" : "ChargeItem.extension",
      "sliceName" : "ServiceAssignment",
      "short" : "ServiceAssignment",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-serviceassignment"]
      }],
      "mapping" : [{
        "identity" : "alis",
        "map" : "ServiceAssignment"
      }]
    },
    {
      "id" : "ChargeItem.extension:ServiceItemErrorCode",
      "path" : "ChargeItem.extension",
      "sliceName" : "ServiceItemErrorCode",
      "short" : "ServiceItemErrorCode",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-serviceitemerrorcode"]
      }],
      "mapping" : [{
        "identity" : "alis",
        "map" : "ServiceItemErrorCode"
      }]
    },
    {
      "id" : "ChargeItem.extension:ParameterV40",
      "path" : "ChargeItem.extension",
      "sliceName" : "ParameterV40",
      "short" : "ParameterV40",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-parameterv40"]
      }],
      "mapping" : [{
        "identity" : "alis",
        "map" : "ParameterV40"
      }]
    },
    {
      "id" : "ChargeItem.extension:SLIndicationCode",
      "path" : "ChargeItem.extension",
      "sliceName" : "SLIndicationCode",
      "short" : "ParameterV40: SLIndicationCode",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-epl-regulated-authorization-limitation-indication-code"]
      }],
      "mapping" : [{
        "identity" : "alis",
        "map" : "ParameterV40.ParamTyp = SLIndicationCode"
      }]
    },
    {
      "id" : "ChargeItem.status",
      "path" : "ChargeItem.status",
      "short" : "billable | not-billable",
      "mapping" : [{
        "identity" : "alis",
        "map" : "ParameterV40.ParamTyp = Billable"
      }]
    },
    {
      "id" : "ChargeItem.code.coding",
      "path" : "ChargeItem.code.coding",
      "min" : 1
    },
    {
      "id" : "ChargeItem.code.coding.system",
      "path" : "ChargeItem.code.coding.system",
      "short" : "ServiceType",
      "min" : 1,
      "mapping" : [{
        "identity" : "alis",
        "map" : "ServiceType"
      }]
    },
    {
      "id" : "ChargeItem.code.coding.code",
      "path" : "ChargeItem.code.coding.code",
      "short" : "ServiceItem",
      "min" : 1,
      "mapping" : [{
        "identity" : "alis",
        "map" : "ServiceItem"
      }]
    },
    {
      "id" : "ChargeItem.subject",
      "path" : "ChargeItem.subject",
      "short" : "Patient",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-patient"],
        "aggregation" : ["contained"]
      }]
    },
    {
      "id" : "ChargeItem.subject.reference",
      "path" : "ChargeItem.subject.reference",
      "min" : 1
    },
    {
      "id" : "ChargeItem.context",
      "path" : "ChargeItem.context",
      "short" : "Encounter",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-encounter"],
        "aggregation" : ["contained"]
      }],
      "mapping" : [{
        "identity" : "alis",
        "map" : "Visit"
      }]
    },
    {
      "id" : "ChargeItem.context.reference",
      "path" : "ChargeItem.context.reference",
      "min" : 1
    },
    {
      "id" : "ChargeItem.occurrence[x]",
      "path" : "ChargeItem.occurrence[x]",
      "slicing" : {
        "discriminator" : [{
          "type" : "type",
          "path" : "$this"
        }],
        "ordered" : false,
        "rules" : "open"
      },
      "min" : 1
    },
    {
      "id" : "ChargeItem.occurrence[x]:occurrenceDateTime",
      "path" : "ChargeItem.occurrence[x]",
      "sliceName" : "occurrenceDateTime",
      "short" : "ServiceDate",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }],
      "mapping" : [{
        "identity" : "alis",
        "map" : "ServiceDate"
      }]
    },
    {
      "id" : "ChargeItem.performer",
      "path" : "ChargeItem.performer",
      "short" : "PersonV40",
      "mapping" : [{
        "identity" : "alis",
        "map" : "PersonV40"
      }]
    },
    {
      "id" : "ChargeItem.performer.function",
      "path" : "ChargeItem.performer.function",
      "min" : 1
    },
    {
      "id" : "ChargeItem.performer.function.coding",
      "path" : "ChargeItem.performer.function.coding",
      "min" : 1,
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://fhir.ch/ig/ch-alis-connect/ValueSet/ch-alis-connect-persontyp"
      }
    },
    {
      "id" : "ChargeItem.performer.function.coding.system",
      "path" : "ChargeItem.performer.function.coding.system",
      "min" : 1
    },
    {
      "id" : "ChargeItem.performer.function.coding.code",
      "path" : "ChargeItem.performer.function.coding.code",
      "short" : "PersonTyp",
      "min" : 1,
      "mapping" : [{
        "identity" : "alis",
        "map" : "PersonTyp"
      }]
    },
    {
      "id" : "ChargeItem.performer.actor.display",
      "path" : "ChargeItem.performer.actor.display",
      "short" : "PersonID",
      "min" : 1,
      "mapping" : [{
        "identity" : "alis",
        "map" : "PersonID"
      }]
    },
    {
      "id" : "ChargeItem.performingOrganization.display",
      "path" : "ChargeItem.performingOrganization.display",
      "short" : "ProviderID",
      "min" : 1,
      "mapping" : [{
        "identity" : "alis",
        "map" : "ProviderID"
      }]
    },
    {
      "id" : "ChargeItem.costCenter.display",
      "path" : "ChargeItem.costCenter.display",
      "short" : "ReferrerID",
      "min" : 1,
      "mapping" : [{
        "identity" : "alis",
        "map" : "ReferrerID"
      }]
    },
    {
      "id" : "ChargeItem.quantity",
      "path" : "ChargeItem.quantity",
      "min" : 1
    },
    {
      "id" : "ChargeItem.quantity.value",
      "path" : "ChargeItem.quantity.value",
      "short" : "Quantity",
      "min" : 1,
      "mapping" : [{
        "identity" : "alis",
        "map" : "Quantity"
      }]
    },
    {
      "id" : "ChargeItem.priceOverride.value",
      "path" : "ChargeItem.priceOverride.value",
      "short" : "ParameterV40: Amount",
      "min" : 1,
      "mapping" : [{
        "identity" : "alis",
        "map" : "ParameterV40.ParamTyp = Amount"
      }]
    },
    {
      "id" : "ChargeItem.enterer.display",
      "path" : "ChargeItem.enterer.display",
      "short" : "EnteredBy",
      "min" : 1,
      "mapping" : [{
        "identity" : "alis",
        "map" : "EnteredBy"
      }]
    },
    {
      "id" : "ChargeItem.enteredDate",
      "path" : "ChargeItem.enteredDate",
      "short" : "EnteredDateTime",
      "mapping" : [{
        "identity" : "alis",
        "map" : "EnteredDateTime"
      }]
    },
    {
      "id" : "ChargeItem.supportingInformation",
      "path" : "ChargeItem.supportingInformation",
      "short" : "ParameterV40: BMI",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/bmi"],
        "aggregation" : ["contained"]
      }],
      "mapping" : [{
        "identity" : "alis",
        "map" : "ParameterV40.ParamTyp = BMI"
      }]
    },
    {
      "id" : "ChargeItem.supportingInformation.reference",
      "path" : "ChargeItem.supportingInformation.reference",
      "min" : 1
    }]
  }
}

```
