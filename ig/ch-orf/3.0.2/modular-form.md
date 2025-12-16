# Modular Form - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* **Modular Form**

## Modular Form

### SDC Modular Forms

Modular Forms describes an architecture to support constructing forms from other sub-forms and/or from libraries of pre-defined questions to ease form development and maintenance. See also the SDC specification [here](http://hl7.org/fhir/uv/sdc/STU3/modular.html).

### CH ORF Modular Form

It is common for questionnaires to share content - the same questions or even the same sections might appear in multiple forms.

The mechanism for enabling re-use in CH ORF is as follows: 
 [Modular Questionnaires](http://hl7.org/fhir/uv/sdc/STU3/modular.html#modular) allow one questionnaire to be composed of sub-questionnaires (which can in turn be composed of further sub-questionnaires, and so on).

The [ORF Questionnaire](Questionnaire-order-referral-form.md) is split up in different sections, e.g. Order, Receiver, Patient etc. Each of this section is defined in a separate questionnaire module, in that way dependent Implementation Guides can directly reuse this sections into their derived ORF Questionnaires.

The base ORF Questionnaire is available in a [modular version](Questionnaire-order-referral-form-modular.md) and in a [assembled version](Questionnaire-order-referral-form.md).

A Form Filler using the modular version needs to assemble the questionnaire with the subQuestionnaires. A FHIR server can support this by offering support for the [$assemble](http://hl7.org/fhir/uv/sdc/STU3/OperationDefinition-Questionnaire-assemble.html) operation.

#### CH ORF Questionnaire Section Modules

Each section of the [ORF Questionnaire](Questionnaire-order-referral-form.md) is defined by a modular subQuestionnaire:

* [Module Questionnaire Order](Questionnaire-ch-orf-module-order.md): Order section
* [Module Questionnaire Receiver](Questionnaire-ch-orf-module-receiver.md): Receiver section
* [Module Questionnaire Patient](Questionnaire-ch-orf-module-patient.md): Patient section
* [Module Questionnaire Requested Encounter](Questionnaire-ch-orf-module-requestedencounter.md): RequestedEncounter section
* [Module Questionnaire Coverage](Questionnaire-ch-orf-module-coverage.md): Coverage section
* [Module Questionnaire Sender](Questionnaire-ch-orf-module-sender.md): Sender section
* [Module Questionnaire Receiver Copy](Questionnaire-ch-orf-module-receivercopy.md): ReceiverCopy section
* [Module Questionnaire Appointment](Questionnaire-ch-orf-module-appointment.md): Appointment section
* [Module Questionnaire Initiator](Questionnaire-ch-orf-module-initiator.md): Initiator section
* [Module Questionnaire Consent](Questionnaire-ch-orf-module-consent.md): Consent section

Further re-usable modules used in the sections:

* [Module Questionnaire Practitioner Name-Tel](Questionnaire-ch-orf-module-practitioner-nametel.md): Defining name and contact details
* [Module Questionnaire Address](Questionnaire-ch-orf-module-address.md): Address elements

