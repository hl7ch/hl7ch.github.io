# EMS Procedures to FHIR Mapping - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EMS Procedures to FHIR Mapping**

## ConceptMap: EMS Procedures to FHIR Mapping 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/ConceptMap/EmsProcedures2Fhir | *Version*:2.0.0-ballot |
| Active as of 2026-06-15 | *Computable Name*:EmsProcedures2Fhir |
| **Copyright/Legal**: CC0-1.0 | |

 
This map shows how the procedures section from the EMS Protocol is represented using FHIR. 

Mapping from (not specified) to (not specified)

**Group 1 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Composition](StructureDefinition-ch-ems-composition.md)

* **Source Code**: [EMSProtocol.procedures](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.procedures)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Composition.section:procedures](StructureDefinition-ch-ems-composition-definitions.md#Composition.section:procedures)
  * **Card.**: 0..1
  * **Type**: todo

-------

**Group 2 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS MedicationAdministration](StructureDefinition-ch-ems-medicationadministration.md)

* **Source Code**: [EMSProtocol.procedures.medicationAdministration.medication](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.procedures.medicationAdministration.medication)
  * **Card.**: 1..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [MedicationAdministration.medication[x]](StructureDefinition-ch-ems-medicationadministration-definitions.md#MedicationAdministration.medication[x])
  * **Card.**: 1..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.procedures.medicationAdministration.dose](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.procedures.medicationAdministration.dose)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [MedicationAdministration.dosage.dose](StructureDefinition-ch-ems-medicationadministration-definitions.md#MedicationAdministration.dosage.dose)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.procedures.medicationAdministration.timing.time](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.procedures.medicationAdministration.timing.time)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [MedicationAdministration.effective[x]](StructureDefinition-ch-ems-medicationadministration-definitions.md#MedicationAdministration.effective[x])
  * **Card.**: 1..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.procedures.medicationAdministration.timing.period](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.procedures.medicationAdministration.timing.period)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [MedicationAdministration.effective[x]](StructureDefinition-ch-ems-medicationadministration-definitions.md#MedicationAdministration.effective[x])
  * **Card.**: 1..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.procedures.medicationAdministration.routeOfAdministration](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.procedures.medicationAdministration.routeOfAdministration)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [MedicationAdministration.dosage.route](StructureDefinition-ch-ems-medicationadministration-definitions.md#MedicationAdministration.dosage.route)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.procedures.medicationAdministration.methodOfAdministration](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.procedures.medicationAdministration.methodOfAdministration)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [MedicationAdministration.dosage.method](StructureDefinition-ch-ems-medicationadministration-definitions.md#MedicationAdministration.dosage.method)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.procedures.medicationAdministration.reason](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.procedures.medicationAdministration.reason)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [MedicationAdministration.reasonCode.text](StructureDefinition-ch-ems-medicationadministration-definitions.md#MedicationAdministration.reasonCode.text)
  * **Card.**: 0..1
  * **Type**: todo

-------

**Group 3 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Medication](StructureDefinition-ch-ems-medication.md)

* **Source Code**: [EMSProtocol.procedures.medicationAdministration.medication.product.gtin](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.procedures.medicationAdministration.medication.product.gtin)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Medication.code.coding:GTIN](StructureDefinition-ch-ems-medication-definitions.md#Medication.code.coding:GTIN)
  * **Card.**: 0..*
  * **Type**: todo
* **Source Code**: [EMSProtocol.procedures.medicationAdministration.medication.product.atc](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.procedures.medicationAdministration.medication.product.atc)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Medication.code.coding:ATC](StructureDefinition-ch-ems-medication-definitions.md#Medication.code.coding:ATC)
  * **Card.**: 0..*
  * **Type**: todo
* **Source Code**: [EMSProtocol.procedures.medicationAdministration.medication.product.freeText](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.procedures.medicationAdministration.medication.product.freeText)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Medication.code.text](StructureDefinition-ch-ems-medication-definitions.md#Medication.code.text)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.procedures.medicationAdministration.medication.ingredient](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.procedures.medicationAdministration.medication.ingredient)
  * **Card.**: 0..*
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Medication.ingredient.item[x]](StructureDefinition-ch-ems-medication-definitions.md#Medication.ingredient.item[x])
  * **Card.**: 1..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.procedures.medicationAdministration.medication.galenicForm](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.procedures.medicationAdministration.medication.galenicForm)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Medication.form](StructureDefinition-ch-ems-medication-definitions.md#Medication.form)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.procedures.medicationAdministration.medication.packageSize](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.procedures.medicationAdministration.medication.packageSize)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Medication.amount](StructureDefinition-ch-ems-medication-definitions.md#Medication.amount)
  * **Card.**: 0..1
  * **Type**: todo

-------

**Group 4 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Procedure: Wound Treatment](StructureDefinition-ch-ems-procedure-woundtreatment.md)

* **Source Code**: [EMSProtocol.procedures.woundTreatment](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.procedures.woundTreatment)
  * **Card.**: 0..*
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Procedure.code](StructureDefinition-ch-ems-procedure-woundtreatment-definitions.md#Procedure.code)
  * **Card.**: 0..1
  * **Type**: todo

-------

**Group 5 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Procedure: Airways](StructureDefinition-ch-ems-procedure-airways.md)

* **Source Code**: [EMSProtocol.procedures.airway.intervention](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.procedures.airway.intervention)
  * **Card.**: 0..*
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Procedure.code](StructureDefinition-ch-ems-procedure-airways-definitions.md#Procedure.code)
  * **Card.**: 0..1
  * **Type**: todo

-------

**Group 6 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Procedure: Breathing](StructureDefinition-ch-ems-procedure-breathing.md)

* **Source Code**: [EMSProtocol.procedures.breathing.intervention](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.procedures.breathing.intervention)
  * **Card.**: 0..*
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Procedure.code](StructureDefinition-ch-ems-procedure-breathing-definitions.md#Procedure.code)
  * **Card.**: 0..1
  * **Type**: todo

-------

**Group 7 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Procedure (Base)](StructureDefinition-ch-ems-procedure.md)

* **Source Code**: [EMSProtocol.procedures.circulation.intervention](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.procedures.circulation.intervention)
  * **Card.**: 0..*
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Procedure.code](StructureDefinition-ch-ems-procedure-definitions.md#Procedure.code)
  * **Card.**: 0..1
  * **Type**: todo

-------

**Group 8 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Procedure (Base)](StructureDefinition-ch-ems-procedure.md)

* **Source Code**: [EMSProtocol.procedures.disability.intervention](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.procedures.disability.intervention)
  * **Card.**: 0..*
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Procedure.code](StructureDefinition-ch-ems-procedure-definitions.md#Procedure.code)
  * **Card.**: 0..1
  * **Type**: todo

-------

**Group 9 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Procedure (Base)](StructureDefinition-ch-ems-procedure.md)

* **Source Code**: [EMSProtocol.procedures.exposure.intervention](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.procedures.exposure.intervention)
  * **Card.**: 0..*
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Procedure.code](StructureDefinition-ch-ems-procedure-definitions.md#Procedure.code)
  * **Card.**: 0..1
  * **Type**: todo



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "EmsProcedures2Fhir",
  "url" : "http://fhir.ch/ig/ch-ems/ConceptMap/EmsProcedures2Fhir",
  "version" : "2.0.0-ballot",
  "name" : "EmsProcedures2Fhir",
  "title" : "EMS Procedures to FHIR Mapping",
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
  "description" : "This map shows how the procedures section from the EMS Protocol is represented using FHIR.",
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
      "code" : "EMSProtocol.procedures",
      "target" : [{
        "code" : "Composition.section:procedures",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-medicationadministration",
    "element" : [{
      "code" : "EMSProtocol.procedures.medicationAdministration.medication",
      "target" : [{
        "code" : "MedicationAdministration.medication[x]",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.procedures.medicationAdministration.dose",
      "target" : [{
        "code" : "MedicationAdministration.dosage.dose",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.procedures.medicationAdministration.timing.time",
      "target" : [{
        "code" : "MedicationAdministration.effective[x]",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.procedures.medicationAdministration.timing.period",
      "target" : [{
        "code" : "MedicationAdministration.effective[x]",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.procedures.medicationAdministration.routeOfAdministration",
      "target" : [{
        "code" : "MedicationAdministration.dosage.route",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.procedures.medicationAdministration.methodOfAdministration",
      "target" : [{
        "code" : "MedicationAdministration.dosage.method",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.procedures.medicationAdministration.reason",
      "target" : [{
        "code" : "MedicationAdministration.reasonCode.text",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-medication",
    "element" : [{
      "code" : "EMSProtocol.procedures.medicationAdministration.medication.product.gtin",
      "target" : [{
        "code" : "Medication.code.coding:GTIN",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.procedures.medicationAdministration.medication.product.atc",
      "target" : [{
        "code" : "Medication.code.coding:ATC",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.procedures.medicationAdministration.medication.product.freeText",
      "target" : [{
        "code" : "Medication.code.text",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.procedures.medicationAdministration.medication.ingredient",
      "target" : [{
        "code" : "Medication.ingredient.item[x]",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.procedures.medicationAdministration.medication.galenicForm",
      "target" : [{
        "code" : "Medication.form",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.procedures.medicationAdministration.medication.packageSize",
      "target" : [{
        "code" : "Medication.amount",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-procedure-woundtreatment",
    "element" : [{
      "code" : "EMSProtocol.procedures.woundTreatment",
      "target" : [{
        "code" : "Procedure.code",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-procedure-airways",
    "element" : [{
      "code" : "EMSProtocol.procedures.airway.intervention",
      "target" : [{
        "code" : "Procedure.code",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-procedure-breathing",
    "element" : [{
      "code" : "EMSProtocol.procedures.breathing.intervention",
      "target" : [{
        "code" : "Procedure.code",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-procedure",
    "element" : [{
      "code" : "EMSProtocol.procedures.circulation.intervention",
      "target" : [{
        "code" : "Procedure.code",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-procedure",
    "element" : [{
      "code" : "EMSProtocol.procedures.disability.intervention",
      "target" : [{
        "code" : "Procedure.code",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-procedure",
    "element" : [{
      "code" : "EMSProtocol.procedures.exposure.intervention",
      "target" : [{
        "code" : "Procedure.code",
        "equivalence" : "equivalent"
      }]
    }]
  }]
}

```
