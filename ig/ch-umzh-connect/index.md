# Home - CH UMZH Connect IG (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* **Home**

## Home

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-umzh-connect/ImplementationGuide/ch.fhir.ig.ch-umzh-connect | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:CHUMZHConnect |
| **Copyright/Legal**: CC0-1.0 | |

### Introduction

**CH UMZH Connect** is a FHIR Implementation Guide for the University Medicine Zurich (UMZH) focusing on referral and external service order processes.

UMZH-Connect is a collaborative initiative to improve digital interoperability between healthcare providers in the Zurich ecosystem—initially focusing on university hospitals and close partners. Today, key processes such as referrals, transfers, and external orders (e.g., lab or radiology requests) still require manual re-entry of clinical and administrative information across systems, causing delays, inconsistencies, and avoidable workload. The project targets these friction points by enabling “push-button” and fully automated data exchange across participants, driven by concrete, high-value use cases that can be implemented quickly and measured in terms of business and clinical benefit.

The intended solution is an API framework and shared implementation approach that allows providers to act as API producers and consumers using standardized, interoperable interfaces (e.g. FHIR and REST). A central element is a clearly defined “data contract” (FHIR implementation guidance) that supports both read and write operations for agreed workflows — starting with core referral/order content such as reason for request, diagnoses, history, medication, procedures, and administrative data, while remaining extensible for additional use cases and participants over time. The “data contract” is based on the international Clinical Order Workflow (COW) and customized for swiss-specifics in this UMZH-Connect FHIR IG.

Initial Use Cases focus on the following resource types which are based on the profiles from [CH Core](https://fhir.ch/ig/ch-core/index.html) and [CH eTOC](https://fhir.ch/ig/ch-etoc/index.html):

* Order, service request and clinical question
* Administrative data (personal details, insurance, etc.)
* Diagnoses
* Medication
* Allergies
* Reports (documents)
* ImagingStudies

These content areas are intended to be expandable in the future.

This implementation guide is under informative ballot by [HL7 Switzerland](https://www.hl7.ch/) from August 4th, 2026 until September 30th, 2026. Please add your feedback via the 'Propose a change'-link in the footer.

[Changelog](changelog.md) with significant changes, open and closed issues.

**Download**: You can download this implementation guide in the [NPM package](https://confluence.hl7.org/display/FHIR/NPM+Package+Specification) format from [here](package.tgz).

### Workflow orientation

This implementation guide is based on the core principles of [Clinical Order Workflow IG](https://hl7.org/fhir/uv/cow/2025May/) with a focus on the [**Task at Fulfiller**](https://hl7.org/fhir/uv/cow/2025May/fulfiller-determination.html#task-at-fulfiller) principle where the Placer creates a ServiceRequest and POSTs a Task to the Fulfiller's FHIR server, with the ServiceRequest referenced in `Task.basedOn`. The Fulfiller manages the Task lifecycle and updates the Placer about progress and outcomes.

The core concepts and principles are depicted in detail here:

[Workflow oriented API design](core-concept-workflow-api.md)

* **Resource Querying**: The Placer SHALL support the `_include` parameter for querying the ServiceRequest along with all referenced resources.

### Security

This IG specifies OAuth 2.0 and OpenID Connect–based architectures for securing APIs by the use of Security profiles such as SMART on FHIR define standards and OpenID Foundation’s FAPI 2.0, which sharpens security awareness by enforcing measures to mitigate particular risk scenarios in machine-to-machine communication.

A particular focus is set on context-centric authorization, driven by the fact that authorization should be enforced based on the context of data consumption — in our case providing limited access in the context of a specific workflow object (ServiceRequest or Task).

We show approaches on how to harden eco-system exposed API's and how to enforce fine-grained authorization for our use-cases.

The detailed security concept can be found here:

[Security concept](security.md)

### Use cases

* [Orthopedic referral](usecase-referral-orthopedic.md)
* [Sarcome tumorboard referral](usecase-referral-sarcoma-tumorboard.md)

### IP Statements

This document is licensed under Creative Commons "No Rights Reserved" ([CC0](https://creativecommons.org/publicdomain/zero/1.0/)).

HL7®, HEALTH LEVEL SEVEN®, FHIR® and the FHIR ![](icon-fhir-16.png)® are trademarks owned by Health Level Seven International, registered with the United States Patent and Trademark Office.

This implementation guide contains and references intellectual property owned by third parties ("Third Party IP"). Acceptance of these License Terms does not grant any rights with respect to Third Party IP. The licensee alone is responsible for identifying and obtaining any necessary licenses or authorizations to utilize Third Party IP in connection with the specification or otherwise.

This publication includes IP covered under the following statements.

* CC0-1.0

* [Condition Category](http://fhir.ch/ig/ch-term/3.4.0/CodeSystem-ch-etoc-conditioncategory.html): [Condition/HeartFailureHFrEF](Condition-HeartFailureHFrEF.md), [Condition/SarcomaKnee](Condition-SarcomaKnee.md) and [Condition/SuspectedACLRupture](Condition-SuspectedACLRupture.md)
* [Coverage Identifier Type](http://fhir.ch/ig/ch-orf/3.0.2/CodeSystem-ch-orf-cs-coverageidentifiertype.html): [Coverage/CoverageMeier](Coverage-CoverageMeier.md)
* [EDQM - Standard Terms](http://fhir.ch/ig/ch-term/3.4.0/CodeSystem-edqm-standardterms.html): [Medication/MedAspirin](Medication-MedAspirin.md), [MedicationStatement/MedicationAspirin](MedicationStatement-MedicationAspirin.md), [MedicationStatement/MedicationConcor](MedicationStatement-MedicationConcor.md) and [MedicationStatement/MedicationEntresto](MedicationStatement-MedicationEntresto.md)


* ISO maintains the copyright on the country codes, and controls its use carefully. For further details see the ISO 3166 web page: [https://www.iso.org/iso-3166-country-codes.html](https://www.iso.org/iso-3166-country-codes.html)

* [ISO 3166-1 Codes for the representation of names of countries and their subdivisions — Part 1: Country code](http://terminology.hl7.org/6.5.0/CodeSystem-ISO3166Part1.html): [CHUMZHConnect](index.md), [ChUmzhConnectCoordinationTask](StructureDefinition-ch-umzh-connect-coordinationtask.md)... Show 12 more, [ChUmzhConnectServiceRequest](StructureDefinition-ch-umzh-connect-servicerequest.md), [ChUmzhConnectServiceRequestCategoryVS](ValueSet-ch-umzh-connect-servicerequest-category.md), [Questionnaire/QuestionnaireSmokingStatus](Questionnaire-QuestionnaireSmokingStatus.md), [UMZHConnectFulfiller](ActorDefinition-ch-umzh-connect-fulfiller.md), [UMZHConnectPlacer](ActorDefinition-ch-umzh-connect-placer.md), [UMZHconnectRestServer](CapabilityStatement-ChUmzhConnectCapabilityStatement.md), [ch-umzhconnectig-servicerequest-insurance](SearchParameter-ch-umzhconnectig-servicerequest-insurance.md), [ch-umzhconnectig-servicerequest-reasonreference](SearchParameter-ch-umzhconnectig-servicerequest-reasonreference.md), [ch-umzhconnectig-servicerequest-supportinginfo](SearchParameter-ch-umzhconnectig-servicerequest-supportinginfo.md), [ch-umzhconnectig-task-inputreference](SearchParameter-ch-umzhconnectig-task-inputreference.md), [ch-umzhconnectig-task-outputcanonical](SearchParameter-ch-umzhconnectig-task-outputcanonical.md) and [ch-umzhconnectig-task-outputreference](SearchParameter-ch-umzhconnectig-task-outputreference.md)


* The UCUM codes, UCUM table (regardless of format), and UCUM Specification are copyright 1999-2009, Regenstrief Institute, Inc. and the Unified Codes for Units of Measures (UCUM) Organization. All rights reserved. [https://ucum.org/trac/wiki/TermsOfUse](https://ucum.org/trac/wiki/TermsOfUse)

* [Unified Code for Units of Measure (UCUM)](http://hl7.org/fhir/uv/xver-r5.r4/0.1.0/CodeSystem-v3-ucum.html): [MedicationStatement/MedicationAspirin](MedicationStatement-MedicationAspirin.md), [MedicationStatement/MedicationConcor](MedicationStatement-MedicationConcor.md) and [MedicationStatement/MedicationEntresto](MedicationStatement-MedicationEntresto.md)


* These codes are excerpted from Digital Imaging and Communications in Medicine (DICOM) Standard, Part 16: Content Mapping Resource, Copyright © 2011 by the National Electrical Manufacturers Association.

* [DICOM Controlled Terminology Definitions](http://hl7.org/fhir/R4/codesystem-dicom-dcim.html): [ImagingStudy/ImagingCT](ImagingStudy-ImagingCT.md) and [ImagingStudy/ImagingPET](ImagingStudy-ImagingPET.md)


* This material contains content that is copyright of SNOMED International. Implementers of these specifications must have the appropriate SNOMED CT Affiliate license - for more information contact [https://www.snomed.org/get-snomed](https://www.snomed.org/get-snomed) or [info@snomed.org](mailto:info@snomed.org).

* [SNOMED Clinical Terms&reg; (SNOMED CT&reg;)](http://hl7.org/fhir/R4/codesystem-snomedct.html): [ChUmzhConnectServiceRequest](StructureDefinition-ch-umzh-connect-servicerequest.md), [ChUmzhConnectServiceRequestCategoryVS](ValueSet-ch-umzh-connect-servicerequest-category.md)... Show 12 more, [DocumentReference/DocDischargeReportOrthopedics](DocumentReference-DocDischargeReportOrthopedics.md), [Medication/MedAspirin](Medication-MedAspirin.md), [MedicationStatement/MedicationConcor](MedicationStatement-MedicationConcor.md), [MedicationStatement/MedicationEntresto](MedicationStatement-MedicationEntresto.md), [Orthopedic Surgery](HealthcareService-HealthcareServiceOrthopedicsFulfiller.md), [Questionnaire/QuestionnaireSmokingStatus](Questionnaire-QuestionnaireSmokingStatus.md), [QuestionnaireResponse/QuestionnaireResponseSmokingStatus](QuestionnaireResponse-QuestionnaireResponseSmokingStatus.md), [Sarcoma Tumor Board](HealthcareService-HealthcareServiceTumorboardFulfiller.md), [ServiceRequest/ReferralOrthopedicSurgery](ServiceRequest-ReferralOrthopedicSurgery.md), [ServiceRequest/ReferralTumorboard](ServiceRequest-ReferralTumorboard.md), [Task/TaskReferralOrthopedicSurgeryCompleted](Task-TaskReferralOrthopedicSurgeryCompleted.md) and [Task/TaskReferralOrthopedicSurgeryUpdated](Task-TaskReferralOrthopedicSurgeryUpdated.md)


* This material derives from the HL7 Terminology (THO). THO is copyright ©1989+ Health Level Seven International and is made available under the CC0 designation. For more licensing information see: [https://terminology.hl7.org/license.html](https://terminology.hl7.org/license.html)

* [AllergyIntolerance Clinical Status Codes](http://terminology.hl7.org/7.2.0/CodeSystem-allergyintolerance-clinical.html): [AllergyIntolerance/AllergyGado](AllergyIntolerance-AllergyGado.md)
* [Endpoint Connection Type](http://terminology.hl7.org/7.2.0/CodeSystem-endpoint-connection-type.html): [Fulfiller FHIR API](Endpoint-EndpointFulfiller.md) and [Placer FHIR API](Endpoint-EndpointPlacer.md)
* [Endpoint Payload Type](http://terminology.hl7.org/7.2.0/CodeSystem-endpoint-payload-type.html): [Fulfiller FHIR API](Endpoint-EndpointFulfiller.md) and [Placer FHIR API](Endpoint-EndpointPlacer.md)
* [identifierType](http://terminology.hl7.org/7.2.0/CodeSystem-v2-0203.html): [ChUmzhConnectServiceRequest](StructureDefinition-ch-umzh-connect-servicerequest.md), [Patient/PetraMeier](Patient-PetraMeier.md), [ServiceRequest/ReferralOrthopedicSurgery](ServiceRequest-ReferralOrthopedicSurgery.md) and [ServiceRequest/ReferralTumorboard](ServiceRequest-ReferralTumorboard.md)
* [ParticipationType](http://terminology.hl7.org/7.2.0/CodeSystem-v3-ParticipationType.html): [Appointment/AppointmentOrthopedicConsultation](Appointment-AppointmentOrthopedicConsultation.md)


### Cross Version Analysis

This is an R4 IG. None of the features it uses are changed in R4B, so it can be used as is with R4B systems. Packages for both [R4 (ch.fhir.ig.ch-umzh-connect.r4)](package.r4.tgz) and [R4B (ch.fhir.ig.ch-umzh-connect.r4b)](package.r4b.tgz) are available.

### Dependency Table














### Globals Table

*There are no Global profiles defined*



## Resource Content

```json
{
  "resourceType" : "ImplementationGuide",
  "id" : "ch.fhir.ig.ch-umzh-connect",
  "url" : "http://fhir.ch/ig/ch-umzh-connect/ImplementationGuide/ch.fhir.ig.ch-umzh-connect",
  "version" : "1.0.0-ballot",
  "name" : "CHUMZHConnect",
  "title" : "CH UMZH Connect IG (R4)",
  "status" : "active",
  "date" : "2026-06-12",
  "publisher" : "UMZH Connect Team",
  "contact" : [{
    "name" : "UMZH Connect",
    "telecom" : [{
      "system" : "url",
      "value" : "https://umzhconnect.ch/"
    }]
  }],
  "description" : "FHIR Implementation Guide for the University Medicine Zurich (UMZH) focusing on referral processes",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CHE"
    }]
  }],
  "copyright" : "CC0-1.0",
  "packageId" : "ch.fhir.ig.ch-umzh-connect",
  "license" : "CC0-1.0",
  "fhirVersion" : ["4.0.1"],
  "dependsOn" : [{
    "id" : "hl7tx",
    "extension" : [{
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/implementationguide-dependency-comment",
      "valueMarkdown" : "Automatically added as a dependency - all IGs depend on HL7 Terminology"
    }],
    "uri" : "http://terminology.hl7.org/ImplementationGuide/hl7.terminology",
    "packageId" : "hl7.terminology.r4",
    "version" : "7.2.0"
  },
  {
    "id" : "hl7ext",
    "extension" : [{
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/implementationguide-dependency-comment",
      "valueMarkdown" : "Automatically added as a dependency - all IGs depend on the HL7 Extension Pack"
    }],
    "uri" : "http://hl7.org/fhir/extensions/ImplementationGuide/hl7.fhir.uv.extensions",
    "packageId" : "hl7.fhir.uv.extensions.r4",
    "version" : "5.3.0"
  },
  {
    "id" : "ch_fhir_ig_ch_core",
    "uri" : "http://fhir.ch/ig/ch-core/ImplementationGuide/ch.fhir.ig.ch-core",
    "packageId" : "ch.fhir.ig.ch-core",
    "version" : "7.0.0-ballot"
  },
  {
    "id" : "ch_fhir_ig_ch_emed",
    "uri" : "http://fhir.ch/ig/ch-emed/ImplementationGuide/ch.fhir.ig.ch-emed",
    "packageId" : "ch.fhir.ig.ch-emed",
    "version" : "6.0.0"
  },
  {
    "id" : "ch_fhir_ig_ch_etoc",
    "uri" : "http://fhir.ch/ig/ch-etoc/ImplementationGuide/ch.fhir.ig.ch-etoc",
    "packageId" : "ch.fhir.ig.ch-etoc",
    "version" : "3.0.1"
  },
  {
    "id" : "ch_fhir_ig_ch_orf",
    "uri" : "http://fhir.ch/ig/ch-orf/ImplementationGuide/ch.fhir.ig.ch-orf",
    "packageId" : "ch.fhir.ig.ch-orf",
    "version" : "3.0.2"
  },
  {
    "id" : "hl7_fhir_uv_cow",
    "uri" : "http://hl7.org/fhir/uv/cow/ImplementationGuide/hl7.fhir.uv.cow",
    "packageId" : "hl7.fhir.uv.cow",
    "version" : "1.0.0-ballot"
  }],
  "definition" : {
    "extension" : [{
      "extension" : [{
        "url" : "code",
        "valueString" : "copyrightyear"
      },
      {
        "url" : "value",
        "valueString" : "2024+"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "releaselabel"
      },
      {
        "url" : "value",
        "valueString" : "ballot"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "excludettl"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "allow-extensible-warnings"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "display-warnings"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "path-expansion-params"
      },
      {
        "url" : "value",
        "valueString" : "../../expansion-params.json"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "pin-canonicals"
      },
      {
        "url" : "value",
        "valueString" : "pin-multiples"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "autoload-resources"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "path-liquid"
      },
      {
        "url" : "value",
        "valueString" : "template/liquid"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "path-liquid"
      },
      {
        "url" : "value",
        "valueString" : "input/liquid"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "path-qa"
      },
      {
        "url" : "value",
        "valueString" : "temp/qa"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "path-temp"
      },
      {
        "url" : "value",
        "valueString" : "temp/pages"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "path-output"
      },
      {
        "url" : "value",
        "valueString" : "output"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "path-suppressed-warnings"
      },
      {
        "url" : "value",
        "valueString" : "input/ignoreWarnings.txt"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "path-history"
      },
      {
        "url" : "value",
        "valueString" : "http://fhir.ch/ig/ch-umzh-connect/history.html"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "template-html"
      },
      {
        "url" : "value",
        "valueString" : "template-page.html"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "template-md"
      },
      {
        "url" : "value",
        "valueString" : "template-page-md.html"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "apply-contact"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "apply-context"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "apply-copyright"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "apply-jurisdiction"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "apply-license"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "apply-publisher"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "apply-version"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "apply-wg"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "active-tables"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "fmm-definition"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org/fhir/versions.html#maturity"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "propagate-status"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "excludelogbinaryformat"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "tabbed-snapshots"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/expansion-parameters",
      "valueReference" : {
        "reference" : "Parameters/expansion-parameters"
      }
    },
    {
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-internal-dependency",
      "valueCode" : "hl7.fhir.uv.tools.r4#1.1.2"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "copyrightyear"
      },
      {
        "url" : "value",
        "valueString" : "2024+"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "releaselabel"
      },
      {
        "url" : "value",
        "valueString" : "ballot"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "excludettl"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "allow-extensible-warnings"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "display-warnings"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "path-expansion-params"
      },
      {
        "url" : "value",
        "valueString" : "../../expansion-params.json"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "pin-canonicals"
      },
      {
        "url" : "value",
        "valueString" : "pin-multiples"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "autoload-resources"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "path-liquid"
      },
      {
        "url" : "value",
        "valueString" : "template/liquid"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "path-liquid"
      },
      {
        "url" : "value",
        "valueString" : "input/liquid"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "path-qa"
      },
      {
        "url" : "value",
        "valueString" : "temp/qa"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "path-temp"
      },
      {
        "url" : "value",
        "valueString" : "temp/pages"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "path-output"
      },
      {
        "url" : "value",
        "valueString" : "output"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "path-suppressed-warnings"
      },
      {
        "url" : "value",
        "valueString" : "input/ignoreWarnings.txt"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "path-history"
      },
      {
        "url" : "value",
        "valueString" : "http://fhir.ch/ig/ch-umzh-connect/history.html"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "template-html"
      },
      {
        "url" : "value",
        "valueString" : "template-page.html"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "template-md"
      },
      {
        "url" : "value",
        "valueString" : "template-page-md.html"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "apply-contact"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "apply-context"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "apply-copyright"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "apply-jurisdiction"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "apply-license"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "apply-publisher"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "apply-version"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "apply-wg"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "active-tables"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "fmm-definition"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org/fhir/versions.html#maturity"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "propagate-status"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "excludelogbinaryformat"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "tabbed-snapshots"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    }],
    "resource" : [{
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "AllergyIntolerance"
      }],
      "reference" : {
        "reference" : "AllergyIntolerance/AllergyGado"
      },
      "name" : "AllergyGado",
      "description" : "Allergy intolerance against gadolinium-based contrast agent. Hosted on placer.",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Appointment"
      }],
      "reference" : {
        "reference" : "Appointment/AppointmentOrthopedicConsultation"
      },
      "name" : "Appointment Orthopedic Pre-Surgery Consultation",
      "description" : "Pre-operative orthopedic consultation scheduled before the planned knee surgery. Intermediary result referenced in the completed Coordination Task output. Hosted on fulfiller.",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "DocumentReference"
      }],
      "reference" : {
        "reference" : "DocumentReference/DocDischargeReportOrthopedics"
      },
      "name" : "Austrittsbericht Orthopädie",
      "description" : "Discharge report after knee surgery. Referenced in the completed Coordination Task output. Hosted on fulfiller.",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/ch-umzh-connect-coordinationtask"
      },
      "name" : "CH UMZH Connect Coordination Task",
      "description" : "CH UMZH Connect Coordination Task",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/ch-umzh-connect-servicerequest"
      },
      "name" : "CH UMZH Connect ServiceRequest",
      "description" : "CH UMZH Connect ServiceRequest is derived from CH eTOC",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/ch-umzh-connect-servicerequest-category"
      },
      "name" : "CH UMZH Connect ServiceRequest Category",
      "description" : "Value set for ServiceRequest.category defining the type of service request.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "SearchParameter"
      }],
      "reference" : {
        "reference" : "SearchParameter/ch-umzhconnectig-servicerequest-insurance"
      },
      "name" : "ch-umzhconnectig-servicerequest-insurance",
      "description" : "Custom search parameter for ServiceRequest.insurance",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "SearchParameter"
      }],
      "reference" : {
        "reference" : "SearchParameter/ch-umzhconnectig-servicerequest-reasonreference"
      },
      "name" : "ch-umzhconnectig-servicerequest-reasonreference",
      "description" : "Custom search parameter for ServiceRequest.reasonReference",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "SearchParameter"
      }],
      "reference" : {
        "reference" : "SearchParameter/ch-umzhconnectig-servicerequest-supportinginfo"
      },
      "name" : "ch-umzhconnectig-servicerequest-supportinginfo",
      "description" : "Custom search parameter for ServiceRequest.supportingInfo",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "SearchParameter"
      }],
      "reference" : {
        "reference" : "SearchParameter/ch-umzhconnectig-task-inputreference"
      },
      "name" : "ch-umzhconnectig-task-inputreference",
      "description" : "Custom search parameter for Task.input.valueReference",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "SearchParameter"
      }],
      "reference" : {
        "reference" : "SearchParameter/ch-umzhconnectig-task-outputcanonical"
      },
      "name" : "ch-umzhconnectig-task-outputcanonical",
      "description" : "Custom search parameter for Task.output.valueCanonical",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "SearchParameter"
      }],
      "reference" : {
        "reference" : "SearchParameter/ch-umzhconnectig-task-outputreference"
      },
      "name" : "ch-umzhconnectig-task-outputreference",
      "description" : "Custom search parameter for Task.output.valueReference",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CapabilityStatement"
      }],
      "reference" : {
        "reference" : "CapabilityStatement/ChUmzhConnectCapabilityStatement"
      },
      "name" : "ChUmzhConnectCapabilityStatement",
      "description" : "UMZH Connect API requirements. This CapabilityStatement applies to both the [Placer](ActorDefinition-ch-umzh-connect-placer.html) and [Fulfiller](ActorDefinition-ch-umzh-connect-fulfiller.html) server roles. The required interactions overlap significantly; the applicable subset depends on the actor role:\n- **Placer server** — hosts the ServiceRequest and all referenced clinical resources. \\\nThe Fulfiller queries these via `read` and `search`.\n- **Fulfiller server** — hosts the Coordination Task and related output resources. \\\nThe Placer creates it via `create`, applies selective updates via `patch`, and queries via `read` and `search`.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Coverage"
      }],
      "reference" : {
        "reference" : "Coverage/CoverageMeier"
      },
      "name" : "Coverage P. Meier",
      "description" : "Coverage (Garant) with Mrs. Meier as beneficiary and the health insurance Krankenkasse as issuer of the policy (represented as contained resource). Hosted on placer.",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "MedicationStatement"
      }],
      "reference" : {
        "reference" : "MedicationStatement/MedicationAspirin"
      },
      "name" : "Discharge Medication Aspirin",
      "description" : "Aspirin (Acetylsalicylic acid 100 mg) blood thinner for thromboprophylaxis after knee surgery. Discharge medication referenced in the completed Coordination Task output. Hosted on fulfiller.",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Endpoint"
      }],
      "reference" : {
        "reference" : "Endpoint/EndpointFulfiller"
      },
      "name" : "Endpoint Fulfiller",
      "description" : "FHIR REST API endpoint for Fulfiller. Hosted on registry.",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Endpoint"
      }],
      "reference" : {
        "reference" : "Endpoint/EndpointPlacer"
      },
      "name" : "Endpoint Placer",
      "description" : "FHIR REST API endpoint for Placer. Hosted on registry.",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Organization"
      }],
      "reference" : {
        "reference" : "Organization/Fulfiller"
      },
      "name" : "Fulfiller",
      "description" : "Example Organization for Fulfiller. Hosted on registry.",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ActorDefinition"
      }],
      "reference" : {
        "reference" : "ActorDefinition/ch-umzh-connect-fulfiller"
      },
      "name" : "Fulfiller",
      "description" : "The party performing the requested service. Hosts the Coordination Task and related output resources.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Practitioner"
      }],
      "reference" : {
        "reference" : "Practitioner/HansMuster"
      },
      "name" : "Hans Muster",
      "description" : "Example for CH IG Practitioner. Hosted on placer.",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "PractitionerRole"
      }],
      "reference" : {
        "reference" : "PractitionerRole/HansMusterRole"
      },
      "name" : "Hans Muster Role",
      "description" : "Example PractitionerRole for Hans Muster as referring physician at Placer. Hosted on placer.",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "HealthcareService"
      }],
      "reference" : {
        "reference" : "HealthcareService/HealthcareServiceOrthopedicsFulfiller"
      },
      "name" : "HealthcareService Orthopedics Fulfiller",
      "description" : "Example HealthcareService for orthopedic referrals provided by Fulfiller. Hosted on registry.",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "HealthcareService"
      }],
      "reference" : {
        "reference" : "HealthcareService/HealthcareServiceTumorboardFulfiller"
      },
      "name" : "HealthcareService Sarcoma Tumor Board Fulfiller",
      "description" : "Example HealthcareService for sarcoma tumor board provided by Fulfiller. Hosted on registry.",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Condition"
      }],
      "reference" : {
        "reference" : "Condition/HeartFailureHFrEF"
      },
      "name" : "Heart Failure HFrEF",
      "description" : "Chronic heart failure with reduced ejection fraction (HFrEF), NYHA class II. Hosted on placer.",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ImagingStudy"
      }],
      "reference" : {
        "reference" : "ImagingStudy/ImagingCT"
      },
      "name" : "ImagingCT",
      "description" : "CT Scan Right Knee. Hosted on placer.",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ImagingStudy"
      }],
      "reference" : {
        "reference" : "ImagingStudy/ImagingPET"
      },
      "name" : "ImagingPET",
      "description" : "PET Scan Whole Body (external). Hosted on placer.",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Medication"
      }],
      "reference" : {
        "reference" : "Medication/MedAspirin"
      },
      "name" : "Medication Aspirin",
      "description" : "Aspirin (Acetylsalicylic acid 100 mg) film tablet. Standalone (non-contained) Medication resource referenced by the discharge MedicationStatement.",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "MedicationStatement"
      }],
      "reference" : {
        "reference" : "MedicationStatement/MedicationConcor"
      },
      "name" : "Medication Concor",
      "description" : "Concor (Bisoprolol 10 mg) beta-blocker for heart failure treatment. Hosted on placer.",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "MedicationStatement"
      }],
      "reference" : {
        "reference" : "MedicationStatement/MedicationEntresto"
      },
      "name" : "Medication Entresto",
      "description" : "Entresto (Sacubitril/valsartan 97/103 mg) for heart failure treatment. Hosted on placer.",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Patient"
      }],
      "reference" : {
        "reference" : "Patient/PetraMeier"
      },
      "name" : "Petra Meier",
      "description" : "Example for CH Core Patient. Hosted on placer.",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Organization"
      }],
      "reference" : {
        "reference" : "Organization/Placer"
      },
      "name" : "Placer",
      "description" : "Example Organization for Placer. Hosted on registry.",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ActorDefinition"
      }],
      "reference" : {
        "reference" : "ActorDefinition/ch-umzh-connect-placer"
      },
      "name" : "Placer",
      "description" : "The party initiating the referral or order. Hosts the ServiceRequest and all referenced clinical resources.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ServiceRequest"
      }],
      "reference" : {
        "reference" : "ServiceRequest/ReferralOrthopedicSurgery"
      },
      "name" : "Referral Orthopedic Surgery",
      "description" : "Example ServiceRequest for a referral to orthopedic surgery for knee replacement evaluation using the CH eTOC profile. Hosted on placer.",
      "exampleCanonical" : "http://fhir.ch/ig/ch-umzh-connect/StructureDefinition/ch-umzh-connect-servicerequest"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ServiceRequest"
      }],
      "reference" : {
        "reference" : "ServiceRequest/ReferralTumorboard"
      },
      "name" : "Referral Sarcoma Tumor Board",
      "description" : "Example ServiceRequest for a referral to tumor board for sarcoma. Hosted on placer.",
      "exampleCanonical" : "http://fhir.ch/ig/ch-umzh-connect/StructureDefinition/ch-umzh-connect-servicerequest"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Condition"
      }],
      "reference" : {
        "reference" : "Condition/SarcomaKnee"
      },
      "name" : "SarcomaKnee",
      "description" : "Synovial sarcoma of the right knee. Hosted on placer.",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Questionnaire"
      }],
      "reference" : {
        "reference" : "Questionnaire/QuestionnaireSmokingStatus"
      },
      "name" : "Smoking Status Questionnaire",
      "description" : "Questionnaire sent by Fulfiller to Placer to inquire about the patient's smoking status. Hosted on fulfiller.",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "QuestionnaireResponse"
      }],
      "reference" : {
        "reference" : "QuestionnaireResponse/QuestionnaireResponseSmokingStatus"
      },
      "name" : "Smoking Status Questionnaire Response",
      "description" : "QuestionnaireResponse sent by Placer to Fulfiller providing the patient's smoking status. Hosted on fulfiller.",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "DocumentReference"
      }],
      "reference" : {
        "reference" : "DocumentReference/DocCardiologyAttachment"
      },
      "name" : "Sprechstundenbericht Kardiologie",
      "description" : "Example of Document Reference with attachment (pdf). Hosted on placer.",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Condition"
      }],
      "reference" : {
        "reference" : "Condition/SuspectedACLRupture"
      },
      "name" : "Suspected ACL Rupture",
      "description" : "Suspected rupture of left anterior cruciate ligament after an accident. Hosted on placer.",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Task"
      }],
      "reference" : {
        "reference" : "Task/TaskReferralOrthopedicSurgeryCompleted"
      },
      "name" : "Task for Referral Orthopedic Surgery (Completed with Results)",
      "description" : "Completed Task after Fulfiller has performed the knee surgery. Carries forward the smoking-status Questionnaire (output) and the returned QuestionnaireResponse (input), and adds the results: the intermediary pre-surgery consultation Appointment, the discharge report and the discharge medication (blood thinner) in Task.output. Hosted on fulfiller.",
      "exampleCanonical" : "http://fhir.ch/ig/ch-umzh-connect/StructureDefinition/ch-umzh-connect-coordinationtask"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Task"
      }],
      "reference" : {
        "reference" : "Task/TaskReferralOrthopedicSurgery"
      },
      "name" : "Task for Referral Orthopedic Surgery (Initial)",
      "description" : "Initial Task created by Placer based on the ServiceRequest and sent to Fulfiller. Hosted on fulfiller.",
      "exampleCanonical" : "http://fhir.ch/ig/ch-umzh-connect/StructureDefinition/ch-umzh-connect-coordinationtask"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Task"
      }],
      "reference" : {
        "reference" : "Task/TaskReferralOrthopedicSurgeryUpdated"
      },
      "name" : "Task for Referral Orthopedic Surgery (Updated with Questionnaire)",
      "description" : "Updated Task after Fulfiller has accepted the initial Task and added a reference to the Questionnaire to request smoking status from Placer. Hosted on fulfiller.",
      "exampleCanonical" : "http://fhir.ch/ig/ch-umzh-connect/StructureDefinition/ch-umzh-connect-coordinationtask"
    }],
    "page" : {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
        "valueUrl" : "toc.html"
      }],
      "nameUrl" : "toc.html",
      "title" : "Table of Contents",
      "generation" : "html",
      "page" : [{
        "extension" : [{
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
          "valueUrl" : "index.html"
        }],
        "nameUrl" : "index.html",
        "title" : "Home",
        "generation" : "markdown"
      },
      {
        "extension" : [{
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
          "valueUrl" : "core-concept-workflow-api.html"
        }],
        "nameUrl" : "core-concept-workflow-api.html",
        "title" : "Workflow oriented API design",
        "generation" : "markdown"
      },
      {
        "extension" : [{
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
          "valueUrl" : "core-concept-registry.html"
        }],
        "nameUrl" : "core-concept-registry.html",
        "title" : "Registry",
        "generation" : "markdown"
      },
      {
        "extension" : [{
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
          "valueUrl" : "workflow-states.html"
        }],
        "nameUrl" : "workflow-states.html",
        "title" : "Workflow States",
        "generation" : "markdown"
      },
      {
        "extension" : [{
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
          "valueUrl" : "usecase-referral-orthopedic.html"
        }],
        "nameUrl" : "usecase-referral-orthopedic.html",
        "title" : "Referral - Orthopedic Surgery",
        "generation" : "markdown"
      },
      {
        "extension" : [{
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
          "valueUrl" : "usecase-referral-sarcoma-tumorboard.html"
        }],
        "nameUrl" : "usecase-referral-sarcoma-tumorboard.html",
        "title" : "Referral - Sarcoma Tumor Board",
        "generation" : "markdown"
      },
      {
        "extension" : [{
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
          "valueUrl" : "security.html"
        }],
        "nameUrl" : "security.html",
        "title" : "Security",
        "generation" : "markdown"
      },
      {
        "extension" : [{
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
          "valueUrl" : "guidance-reference-architecture.html"
        }],
        "nameUrl" : "guidance-reference-architecture.html",
        "title" : "Reference Architecture",
        "generation" : "markdown"
      },
      {
        "extension" : [{
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
          "valueUrl" : "security-implementation.html"
        }],
        "nameUrl" : "security-implementation.html",
        "title" : "Security Implementation",
        "generation" : "markdown"
      },
      {
        "extension" : [{
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
          "valueUrl" : "changelog.html"
        }],
        "nameUrl" : "changelog.html",
        "title" : "Changelog",
        "generation" : "markdown"
      },
      {
        "extension" : [{
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
          "valueUrl" : "guidance-interactions.html"
        }],
        "nameUrl" : "guidance-interactions.html",
        "title" : "Interactions",
        "generation" : "markdown"
      }]
    },
    "parameter" : [{
      "code" : "path-resource",
      "value" : "input/resources"
    },
    {
      "code" : "path-resource",
      "value" : "input/capabilities"
    },
    {
      "code" : "path-resource",
      "value" : "input/examples"
    },
    {
      "code" : "path-resource",
      "value" : "input/extensions"
    },
    {
      "code" : "path-resource",
      "value" : "input/models"
    },
    {
      "code" : "path-resource",
      "value" : "input/operations"
    },
    {
      "code" : "path-resource",
      "value" : "input/profiles"
    },
    {
      "code" : "path-resource",
      "value" : "input/vocabulary"
    },
    {
      "code" : "path-resource",
      "value" : "input/testing"
    },
    {
      "code" : "path-resource",
      "value" : "input/history"
    },
    {
      "code" : "path-resource",
      "value" : "fsh-generated/resources"
    },
    {
      "code" : "path-pages",
      "value" : "template/config"
    },
    {
      "code" : "path-pages",
      "value" : "input/images"
    },
    {
      "code" : "path-tx-cache",
      "value" : "input-cache/txcache"
    }]
  }
}

```
