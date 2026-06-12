# Mapping - CH ALIS Connect (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* **Mapping**

## Mapping

### Mapping

The figure on the left shows the structural design of the ALIS interface. The figure on the right shows the transformed message as FHIR Bundle where the corresponding ChargeItem resources are inserted. In the same colour the basic mapping between both formats is shown.

### ALIS XML to FHIR Resource ChargeItem and related resources mapping

In a file based exchange 1..* Visits are documented. A single ALIS XML file carries a Header followed by one or more `Visit` elements; each Visit represents a patient case and contains 1..* `Service` elements (the accountable Leistungen), which in turn may carry nested Diagnosis, ServiceAssignment, SessionSectionB, PersonV40 and ParameterV40 information.

The ALIS XML structure is mirrored 1:1 by a set of **logical models**. They are listed on the [Logical Models](logicalmodels.md) page, with [Visit](StructureDefinition-Visit.md) as the entry point.

Every `Visit/Service` maps to one [ChargeItem](StructureDefinition-ch-alis-connect-chargeitem.md), and the visit- and service-level data is distributed onto the ChargeItem together with the [Patient](StructureDefinition-ch-alis-connect-patient.md), [Encounter](StructureDefinition-ch-alis-connect-encounter.md) and [Condition](StructureDefinition-ch-alis-connect-condition.md) resources. The `ChargeItem.context` references the Encounter (the Visit) and `ChargeItem.subject` the Patient, so the Visit grouping is preserved.

The element-level correspondence between the ALIS logical models and the FHIR profiles is documented as **Concept Maps** (Model Maps), one per logical model. They show, side by side, each source element and the FHIR target element it maps to:

* [ALIS Visit to FHIR Mapping](ConceptMap-Alis2FhirVisit.md) — Visit → Encounter, Patient, ChargeItem
* [ALIS Service to FHIR Mapping](ConceptMap-Alis2FhirService.md) — Service → ChargeItem, Condition
* [ALIS Diagnosis to FHIR Mapping](ConceptMap-Alis2FhirDiagnosis.md) — Diagnosis → Condition
* [ALIS PersonV40 to FHIR Mapping](ConceptMap-Alis2FhirPersonV40.md) — PersonV40 → ChargeItem.performer
* [ALIS ParameterV40 to FHIR Mapping](ConceptMap-Alis2FhirParameterV40.md) — ParameterV40 → ParameterV40 extension
* [ALIS ServiceAssignment to FHIR Mapping](ConceptMap-Alis2FhirServiceAssignment.md) — ServiceAssignment → ServiceAssignment extension
* [ALIS SessionSectionB to FHIR Mapping](ConceptMap-Alis2FhirSessionSectionB.md) — SessionSectionB → SessionAnnexB extension

#### ParameterV40: values mapped to dedicated FHIR elements

A `ParameterV40` entry is generally carried in the generic [ParameterV40 extension](StructureDefinition-ch-alis-connect-ext-parameterv40.md) on the ChargeItem. A few `ParamTyp` values are instead mapped to a dedicated FHIR element or extension, as defined in the [ParamTyp code system](CodeSystem-ch-alis-connect-paramtyp.md) and the [ParameterV40 Concept Map](ConceptMap-Alis2FhirParameterV40.md):

| | |
| :--- | :--- |
| `BMI` | `ChargeItem.supportingInformation`(reference to a BMI Observation) |
| `Billable` | `ChargeItem.status`(`billable`|`not-billable`) |
| `Amount` | `ChargeItem.priceOverride.value` |
| `SLIndicationCode` | CH Core regulated-authorization indication-code extension (`ChargeItem.extension:SLIndicationCode`) |

### FHIR mapping from Resource ChargeItem to ALIS XML

The reverse view — starting from a FHIR resource and looking up the ALIS XML field each element corresponds to — is documented directly on the FHIR profiles under their **Mappings** tab (mapping identity `alis`). See:

* [ChargeItem mappings](StructureDefinition-ch-alis-connect-chargeitem-mappings.md)
* [Patient mappings](StructureDefinition-ch-alis-connect-patient-mappings.md)
* [Encounter mappings](StructureDefinition-ch-alis-connect-encounter-mappings.md)
* [Condition mappings](StructureDefinition-ch-alis-connect-condition-mappings.md)

The same `alis` mappings are also defined on the ALIS extensions (e.g. Form, SectionCode, ItemNumber, ServiceAssignment, SessionAnnexB, ParameterV40), each pointing back to its ALIS field.

### Examples of mapping sample ALIS XML Files to FHIR

The table below lists each ALIS XML Visit example on the left and its corresponding ChargeItem(s) on the right.

| | |
| :--- | :--- |
| Visit | ChargeItems |
| [VisitLKAATIcd](Binary-VisitLKAATIcd.md) | [ChargeItemLKAATIcd](ChargeItem-ChargeItemLKAATIcd.md) [ChargeItemLKAATIcd-45679](ChargeItem-ChargeItemLKAATIcd-45679.md) [ChargeItemLKAATIcd-45680](ChargeItem-ChargeItemLKAATIcd-45680.md) |
| [VisitLKAATIcdSessionB](Binary-VisitLKAATIcdSessionB.md) | [ChargeItemLKAATIcdSessionB](ChargeItem-ChargeItemLKAATIcdSessionB.md) [ChargeItemLKAATIcdSessionB-45679](ChargeItem-ChargeItemLKAATIcdSessionB-45679.md) [ChargeItemLKAATIcdSessionB-45680](ChargeItem-ChargeItemLKAATIcdSessionB-45680.md) |
| [VisitLabServiceAssignment](Binary-VisitLabServiceAssignment.md) | [ChargeItemLabServiceAssignment](ChargeItem-ChargeItemLabServiceAssignment.md) |
| [VisitPauschaleKomplett](Binary-VisitPauschaleKomplett.md) | [ChargeItemPauschaleKomplett](ChargeItem-ChargeItemPauschaleKomplett.md) |

