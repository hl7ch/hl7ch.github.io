# EMS Anamnesis to FHIR Mapping - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EMS Anamnesis to FHIR Mapping**

## ConceptMap: EMS Anamnesis to FHIR Mapping 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/ConceptMap/EmsAnamnesis2Fhir | *Version*:2.0.0-ballot |
| Active as of 2026-06-15 | *Computable Name*:EmsAnamnesis2Fhir |
| **Copyright/Legal**: CC0-1.0 | |

 
This map shows how the anamnesis section from the EMS Protocol is represented using FHIR. 

Mapping from (not specified) to (not specified)

**Group 1 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Composition](StructureDefinition-ch-ems-composition.md)

* **Source Code**: [EMSProtocol.anamnesis](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.anamnesis)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Composition.section:anamnesis](StructureDefinition-ch-ems-composition-definitions.md#Composition.section:anamnesis)
  * **Card.**: 0..1
  * **Type**: todo

-------

**Group 2 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Observation: Anamnesis Event](StructureDefinition-ch-ems-observation-anamnesisevent.md)

* **Source Code**: [EMSProtocol.anamnesis.event](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.anamnesis.event)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.value[x]](StructureDefinition-ch-ems-observation-anamnesisevent-definitions.md#Observation.value[x])
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.anamnesis.event.code](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.anamnesis.event.code)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.value[x].coding](StructureDefinition-ch-ems-observation-anamnesisevent-definitions.md#Observation.value[x].coding)
  * **Card.**: 0..*
  * **Type**: todo
* **Source Code**: [EMSProtocol.anamnesis.event.freeText](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.anamnesis.event.freeText)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.value[x].text](StructureDefinition-ch-ems-observation-anamnesisevent-definitions.md#Observation.value[x].text)
  * **Card.**: 0..1
  * **Type**: todo

-------

**Group 3 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Observation: Anamnesis Symptom](StructureDefinition-ch-ems-observation-anamnesissymptom.md)

* **Source Code**: [EMSProtocol.anamnesis.symptom](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.anamnesis.symptom)
  * **Card.**: 0..*
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.value[x]](StructureDefinition-ch-ems-observation-anamnesissymptom-definitions.md#Observation.value[x])
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.anamnesis.symptom.code](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.anamnesis.symptom.code)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.value[x].coding](StructureDefinition-ch-ems-observation-anamnesissymptom-definitions.md#Observation.value[x].coding)
  * **Card.**: 0..*
  * **Type**: todo
* **Source Code**: [EMSProtocol.anamnesis.symptom.freeText](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.anamnesis.symptom.freeText)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.value[x].text](StructureDefinition-ch-ems-observation-anamnesissymptom-definitions.md#Observation.value[x].text)
  * **Card.**: 0..1
  * **Type**: todo

-------

**Group 4 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS AllergyIntolerance](StructureDefinition-ch-ems-allergyintolerance.md)

* **Source Code**: [EMSProtocol.anamnesis.allergyIntolerance.type](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.anamnesis.allergyIntolerance.type)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [AllergyIntolerance.type](StructureDefinition-ch-ems-allergyintolerance-definitions.md#AllergyIntolerance.type)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.anamnesis.allergyIntolerance.code](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.anamnesis.allergyIntolerance.code)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [AllergyIntolerance.code](StructureDefinition-ch-ems-allergyintolerance-definitions.md#AllergyIntolerance.code)
  * **Card.**: 0..1
  * **Type**: todo

-------

**Group 5 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS MedicationStatement](StructureDefinition-ch-ems-medicationstatement.md)

* **Source Code**: [EMSProtocol.anamnesis.medicationStatement.medication](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.anamnesis.medicationStatement.medication)
  * **Card.**: 1..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [MedicationStatement.medication[x]](StructureDefinition-ch-ems-medicationstatement-definitions.md#MedicationStatement.medication[x])
  * **Card.**: 1..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.anamnesis.medicationStatement.dosePerUnit](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.anamnesis.medicationStatement.dosePerUnit)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [MedicationStatement.dosage.doseAndRate.dose[x]](StructureDefinition-ch-ems-medicationstatement-definitions.md#MedicationStatement.dosage.doseAndRate.dose[x])
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.anamnesis.medicationStatement.dosage.scheme](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.anamnesis.medicationStatement.dosage.scheme)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [MedicationStatement.dosage.timing.repeat.when](StructureDefinition-ch-ems-medicationstatement-definitions.md#MedicationStatement.dosage.timing.repeat.when)
  * **Card.**: 0..*
  * **Type**: todo
* **Source Code**: [EMSProtocol.anamnesis.medicationStatement.dosage.freeText](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.anamnesis.medicationStatement.dosage.freeText)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [MedicationStatement.dosage.patientInstruction](StructureDefinition-ch-ems-medicationstatement-definitions.md#MedicationStatement.dosage.patientInstruction)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.anamnesis.medicationStatement.asNeeded](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.anamnesis.medicationStatement.asNeeded)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [MedicationStatement.dosage.asNeeded[x]](StructureDefinition-ch-ems-medicationstatement-definitions.md#MedicationStatement.dosage.asNeeded[x])
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.anamnesis.medicationStatement.reason](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.anamnesis.medicationStatement.reason)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [MedicationStatement.reasonCode.text](StructureDefinition-ch-ems-medicationstatement-definitions.md#MedicationStatement.reasonCode.text)
  * **Card.**: 0..1
  * **Type**: todo

-------

**Group 6 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Medication](StructureDefinition-ch-ems-medication.md)

* **Source Code**: [EMSProtocol.anamnesis.medicationStatement.medication.product.gtin](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.anamnesis.medicationStatement.medication.product.gtin)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Medication.code.coding:GTIN](StructureDefinition-ch-ems-medication-definitions.md#Medication.code.coding:GTIN)
  * **Card.**: 0..*
  * **Type**: todo
* **Source Code**: [EMSProtocol.anamnesis.medicationStatement.medication.product.atc](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.anamnesis.medicationStatement.medication.product.atc)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Medication.code.coding:ATC](StructureDefinition-ch-ems-medication-definitions.md#Medication.code.coding:ATC)
  * **Card.**: 0..*
  * **Type**: todo
* **Source Code**: [EMSProtocol.anamnesis.medicationStatement.medication.product.freeText](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.anamnesis.medicationStatement.medication.product.freeText)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Medication.code.text](StructureDefinition-ch-ems-medication-definitions.md#Medication.code.text)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.anamnesis.medicationStatement.medication.ingredient](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.anamnesis.medicationStatement.medication.ingredient)
  * **Card.**: 0..*
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Medication.ingredient.item[x]](StructureDefinition-ch-ems-medication-definitions.md#Medication.ingredient.item[x])
  * **Card.**: 1..1
  * **Type**: todo



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "EmsAnamnesis2Fhir",
  "url" : "http://fhir.ch/ig/ch-ems/ConceptMap/EmsAnamnesis2Fhir",
  "version" : "2.0.0-ballot",
  "name" : "EmsAnamnesis2Fhir",
  "title" : "EMS Anamnesis to FHIR Mapping",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-06-15T08:00:21+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [{
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/"
    }]
  },
  {
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/",
      "use" : "work"
    }]
  }],
  "description" : "This map shows how the anamnesis section from the EMS Protocol is represented using FHIR.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "group" : [{
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-composition",
    "element" : [{
      "code" : "EMSProtocol.anamnesis",
      "target" : [{
        "code" : "Composition.section:anamnesis",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation-anamnesisevent",
    "element" : [{
      "code" : "EMSProtocol.anamnesis.event",
      "target" : [{
        "code" : "Observation.value[x]",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.anamnesis.event.code",
      "target" : [{
        "code" : "Observation.value[x].coding",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.anamnesis.event.freeText",
      "target" : [{
        "code" : "Observation.value[x].text",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation-anamnesissymptom",
    "element" : [{
      "code" : "EMSProtocol.anamnesis.symptom",
      "target" : [{
        "code" : "Observation.value[x]",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.anamnesis.symptom.code",
      "target" : [{
        "code" : "Observation.value[x].coding",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.anamnesis.symptom.freeText",
      "target" : [{
        "code" : "Observation.value[x].text",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-allergyintolerance",
    "element" : [{
      "code" : "EMSProtocol.anamnesis.allergyIntolerance.type",
      "target" : [{
        "code" : "AllergyIntolerance.type",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.anamnesis.allergyIntolerance.code",
      "target" : [{
        "code" : "AllergyIntolerance.code",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-medicationstatement",
    "element" : [{
      "code" : "EMSProtocol.anamnesis.medicationStatement.medication",
      "target" : [{
        "code" : "MedicationStatement.medication[x]",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.anamnesis.medicationStatement.dosePerUnit",
      "target" : [{
        "code" : "MedicationStatement.dosage.doseAndRate.dose[x]",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.anamnesis.medicationStatement.dosage.scheme",
      "target" : [{
        "code" : "MedicationStatement.dosage.timing.repeat.when",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.anamnesis.medicationStatement.dosage.freeText",
      "target" : [{
        "code" : "MedicationStatement.dosage.patientInstruction",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.anamnesis.medicationStatement.asNeeded",
      "target" : [{
        "code" : "MedicationStatement.dosage.asNeeded[x]",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.anamnesis.medicationStatement.reason",
      "target" : [{
        "code" : "MedicationStatement.reasonCode.text",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-medication",
    "element" : [{
      "code" : "EMSProtocol.anamnesis.medicationStatement.medication.product.gtin",
      "target" : [{
        "code" : "Medication.code.coding:GTIN",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.anamnesis.medicationStatement.medication.product.atc",
      "target" : [{
        "code" : "Medication.code.coding:ATC",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.anamnesis.medicationStatement.medication.product.freeText",
      "target" : [{
        "code" : "Medication.code.text",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.anamnesis.medicationStatement.medication.ingredient",
      "target" : [{
        "code" : "Medication.ingredient.item[x]",
        "equivalence" : "equivalent"
      }]
    }]
  }]
}

```
