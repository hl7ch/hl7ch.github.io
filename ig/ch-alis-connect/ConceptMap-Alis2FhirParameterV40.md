# ALIS ParameterV40 to FHIR Mapping - CH ALIS Connect (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ALIS ParameterV40 to FHIR Mapping**

## ConceptMap: ALIS ParameterV40 to FHIR Mapping 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-alis-connect/ConceptMap/Alis2FhirParameterV40 | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:Alis2FhirParameterV40 |
| **Copyright/Legal**: CC0-1.0 | |

 
Mapping of the ALIS ParameterV40 logical model to the FHIR ParameterV40 extension (on ChargeItem). Specific ParamTyp values (BMI, Billable, Amount, SLIndicationCode) are mapped to dedicated ChargeItem elements instead of the generic ParameterV40 extension. 

Mapping from (not specified) to (not specified)

**Group 1 **Mapping from [CH ALIS Leistungsschnittstelle - ParameterV40](StructureDefinition-ParameterV40.md) to [CH ALIS Extension ParameterV40](StructureDefinition-ch-alis-connect-ext-parameterv40.md)

* **Source Code**: [ParameterV40.ParamTyp](StructureDefinition-ParameterV40.md#ParameterV40.ParamTyp)
  * **Card.**: 1..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Extension.extension:ParamTyp.value[x]:valueCodeableConcept](StructureDefinition-ch-alis-connect-ext-parameterv40-definitions.md#Extension.extension:ParamTyp.value[x]:valueCodeableConcept)
  * **Card.**: 1..1
  * **Type**: todo
* **Source Code**: [ParameterV40.ParamValue](StructureDefinition-ParameterV40.md#ParameterV40.ParamValue)
  * **Card.**: 1..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Extension.extension:ParamValue.value[x]:valueString](StructureDefinition-ch-alis-connect-ext-parameterv40-definitions.md#Extension.extension:ParamValue.value[x]:valueString)
  * **Card.**: 1..1
  * **Type**: todo

-------

**Group 2 **Mapping from [CH ALIS ParamTyp](CodeSystem-ch-alis-connect-paramtyp.md) to [CH ALIS ChargeItem Profile](StructureDefinition-ch-alis-connect-chargeitem.md)

* **Source Code**: BMI
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: ChargeItem.supportingInformation (ParameterV40: BMI)
* **Source Code**: Billable (Billable (j/n))
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: ChargeItem.status (billable | not-billable)
* **Source Code**: Amount
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: ChargeItem.priceOverride.value (ParameterV40: Amount)
* **Source Code**: SLIndicationCode (Indikationscode aus der SL (Spezialitätenliste))
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: ChargeItem.extension:SLIndicationCode (ParameterV40: SLIndicationCode)



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "Alis2FhirParameterV40",
  "url" : "http://fhir.ch/ig/ch-alis-connect/ConceptMap/Alis2FhirParameterV40",
  "version" : "1.0.0-ballot",
  "name" : "Alis2FhirParameterV40",
  "title" : "ALIS ParameterV40 to FHIR Mapping",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-06-12T18:37:15+00:00",
  "publisher" : "ALIS-Connect",
  "contact" : [{
    "name" : "ALIS-Connect",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.alis-connect.ch/"
    }]
  }],
  "description" : "Mapping of the ALIS ParameterV40 logical model to the FHIR ParameterV40 extension (on ChargeItem). Specific ParamTyp values (BMI, Billable, Amount, SLIndicationCode) are mapped to dedicated ChargeItem elements instead of the generic ParameterV40 extension.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "group" : [{
    "source" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ParameterV40",
    "target" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-parameterv40",
    "element" : [{
      "code" : "ParameterV40.ParamTyp",
      "target" : [{
        "code" : "Extension.extension:ParamTyp.value[x]:valueCodeableConcept",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "ParameterV40.ParamValue",
      "target" : [{
        "code" : "Extension.extension:ParamValue.value[x]:valueString",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-alis-connect/CodeSystem/ch-alis-connect-paramtyp",
    "target" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-chargeitem",
    "element" : [{
      "code" : "BMI",
      "target" : [{
        "code" : "ChargeItem.supportingInformation",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "Billable",
      "target" : [{
        "code" : "ChargeItem.status",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "Amount",
      "target" : [{
        "code" : "ChargeItem.priceOverride.value",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "SLIndicationCode",
      "target" : [{
        "code" : "ChargeItem.extension:SLIndicationCode",
        "equivalence" : "equivalent"
      }]
    }]
  }]
}

```
