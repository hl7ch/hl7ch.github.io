# Immunization Administration Document - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* **Immunization Administration Document**

## Immunization Administration Document

The **Immunization Administration document** describes the content and format of an immunization administration document. It serves to document changes in the immunization status and contains information on applied immunizations and further relevant chapters as medical and exposition risks or serology results.

This document is allowed to be used in context of the Swiss EPR but can also used in context of data exchange next to the Swiss EPR.

### Aggregation

Immunization Administration document have one to multiple entries documenting actions on a patient around vaccination. An Immunization Administration document can, but does normally not document the complete immunization status of a patient. Therefor we have defined the document [Vaccination Record](vaccination-record-document.md) which can be created by the the aggregation of Immunization Administration documents and is described [here](aggregator.md). For more and detailed informations, please have a look at the different [Test Cases](TestCases.md).

### FHIR document (Bundle)

This exchange format is defined as a document type that corresponds to a Bundle as a FHIR resource. A Bundle has a list of entries. The first entry is the Composition, in which all contained entries are then referenced.

### Identifiers

#### Identifier Format

In CH VACD it is specified to use an [UUID](https://hl7.org/fhir/R4/datatypes.html#uuid) as identifier, for both the document and resource identifiers. For representing UUIDs the system needs to be urn:ietf:rfc:3986 as described here. The value has to start with urn:uuid:.

#### Document Identifier

Document identifier in [1.1 Immunization Administration](Bundle-1-1-ImmunizationAdministration.md): 
 `Bundle.identifier`/`Composition.identifier`. In first version of the document the both are equal. On updates of the document they differ.

```
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:5bca53b2-0973-4b91-961e-b1e93474c9c2"
  }

```

### Narrative Text Generation

The narrative text in the composition of the bundle of type document can be generated using the FHIR XML representation and the defined xslt transformer defined in this implementation guide. For further details see [Narrative Text Generation](generatenarrativetext.md).

#### Examples

* 1.1 Example Immunization Administration document: [XML](Bundle-1-1-ImmunizationAdministration.xml.md), [JSON](Bundle-1-1-ImmunizationAdministration.json.md)
* 2.1 Example Immunization Administration composition: [XML](Composition-2-1-ImmunizationAdministrationComposition.xml.md), [JSON](Composition-2-1-ImmunizationAdministrationComposition.json.md)
* 3.1 Example Patient: [XML](Patient-3-1-Patient.xml.md), [JSON](Patient-3-1-Patient.json.md)

### Resource profiles

* [CH VACD Immunization Administration Document](StructureDefinition-ch-vacd-document-immunization-administration.md): Definition of the bundle for the immunization administration document.
* [CH VACD Immunization Administration Composition](StructureDefinition-ch-vacd-composition-immunization-administration.md): Definition of the composition for the immunization administration document.
* [CH VACD Immunization](StructureDefinition-ch-vacd-immunization.md): Definition of the immunization part for all documents.
* [CH VACD Basic Immunization](StructureDefinition-ch-vacd-basic-immunization.md) Condition to declare Basic Immunization done by one single condition i.e. for DTPa or Polio.
* [CH VACD Medical Problems](StructureDefinition-ch-vacd-medical-problems.md): Definition of the medical problems part for all documents.
* [CH VACD Past Illness](StructureDefinition-ch-vacd-pastillnesses.md): Definition of the past illness part for all documents.
* [CH VACD AllergyIntolerance](StructureDefinition-ch-vacd-allergyintolerances.md): Definition of the AllergyIntolerance part for all documents.
* [CH VACD Laboratory And Serology](StructureDefinition-ch-vacd-laboratory-serology.md): Definition of the labor and serology part for all documents.
* [CH VACD Medication For Immunization](StructureDefinition-ch-vacd-medication-for-immunization.md) Definition of the medication for immunization.

