# Home - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* **Home**

## Home

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-term/ImplementationGuide/ch.fhir.ig.ch-term | *Version*:3.3.0 |
| Active as of 2025-12-15 | *Computable Name*:CH_TERM |
| **Copyright/Legal**: CC0-1.0 | |

### Introduction

This FHIR® implementation guide contains terminology that is used in Switzerland for the core profiles, various exchange formats and also in the context of the Swiss electronic patient record (EPR). See also [fhir.ch](https://fhir.ch/).

The EPR metadata is specified in the Annexes of the Swiss EPR [FDHA Ordinance](https://www.bag.admin.ch/bag/de/home/gesetze-und-bewilligungen/gesetzgebung/gesetzgebung-mensch-gesundheit/gesetzgebung-elektronisches-patientendossier.html) on the electronic patient record in Switzerland. 
 The EPR artifacts are based on the [CH-EPR](http://ehealthsuisse.art-decor.org/index.php?prefix=ch-epr-) [ART-DECOR](https://www.art-decor.org/mediawiki/index.php/Main_Page) project which has been [published by eHealth Suisse](http://ehealthsuisse.art-decor.org/).

[Changelog](changelog.md) with significant changes, open and closed issues.

**Download**: You can download this implementation guide in [npm format](https://confluence.hl7.org/display/FHIR/NPM+Package+Specification) from [here](package.tgz).

### Scope

This implementation guide contains the Swiss terminology defined via FHIR processable artifacts:

* [Code Systems](codesystems.md)
* [Value Sets](valuesets.md)
* [Concept Maps](conceptmaps.md)
* [Naming Systems](namingsystems.md)

#### Finding Usage Context

Since this implementation guide focuses only on terminology artifacts, it does not indicate where these individual instances are used. The terminology resources defined here are referenced and used by other Swiss FHIR implementation guides. 
 To find the usage context of these terminology artifacts, the [dependent IGs analysis](https://fhir.ch/ig/ch-term/qa-dep.html) can be used. It shows which other implementation guides refer to the terminology resources defined in this guide and are dependent on them.

### Collaboration & Governance

This implementation guide is the result of collaborative work undertaken with participants from [HL7 Switzerland](https://www.hl7.ch) and [eHealth Suisse](https://www.e-health-suisse.ch/startseite.html).

* A yearly major release is foreseen to support the Swiss balloted IGs, with an interim version published to support the HL7 Switzerland ballot phase.
* Additions or changes can only be made through pull requests (PRs) reviewed by the leader of the working group or the HL7 Switzerland technical manager. In addition, PRs must be reviewed and accepted by the leader of the respective HL7 Switzerland working groups, if the terminology resources are used within their implementation guides.
* Patch releases can be made upon request to the FHIR working group. Dependent IGs on CH Term should allow patched versions.
* For terminology resources where CH Term is not the authority or master, the conformance resource needs to indicate the authority in `meta.source` (see [example](https://fhir.ch/ig/ch-term/ValueSet-DocumentEntry.authorRole.json.html) for ART-DECOR).
* Only stable versions of ValueSets are published when there are multiple versions of ValueSets (e.g. DocumentEntry.typeCode), due to the fact that the tooling currently supports only one version ([background](https://github.com/hl7ch/ch-term/issues/5)).

### IP Statements

This document is licensed under Creative Commons "No Rights Reserved" ([CC0](https://creativecommons.org/publicdomain/zero/1.0/)).

HL7®, HEALTH LEVEL SEVEN®, FHIR® and the FHIR ![](icon-fhir-16.png)® are trademarks owned by Health Level Seven International, registered with the United States Patent and Trademark Office.

This implementation guide contains and references intellectual property owned by third parties ("Third Party IP"). Acceptance of these License Terms does not grant any rights with respect to Third Party IP. The licensee alone is responsible for identifying and obtaining any necessary licenses or authorizations to utilize Third Party IP in connection with the specification or otherwise.

This publication includes IP covered under the following statements.

* CC0-1.0

* [BFS Medizinische Statistik - 17 1.2.V02 - Aufenthaltsort vor dem Eintritt / Séjour avant l’admission / Luogo di soggiorno prima dell’ammissione](CodeSystem-bfs-medstats-17-admitsource.md): [BfsMedstats17Admitsource](ValueSet-bfs-medstats-17-admitsource.md)
* [BFS Medizinische Statistik - 18 1.2.V03 - Eintrittsart / Mode d’admission / Genere di ricovero](CodeSystem-bfs-medstats-18-admittype.md): [BfsMedstats18Admittype](ValueSet-bfs-medstats-18-admittype.md)
* [BFS Medizinische Statistik - 19 1.2.V04 - Einweisende Instanz / Décision d’envoi / Istanza ricoverante](CodeSystem-bfs-medstats-19-admitrole.md): [BfsMedstats19Admitrole](ValueSet-bfs-medstats-19-admitrole.md)
* [BFS Medizinische Statistik - 20 1.3.V01 - Behandlungsart / Type de prise en charge / Genere di trattamento](CodeSystem-bfs-medstats-20-encounterclass.md): [BfsMedstats20Encounterclass](ValueSet-bfs-medstats-20-encounterclass.md)
* [BFS Medizinische Statistik - 21 1.3.V02 - Klasse / Classe / Classe](CodeSystem-bfs-medstats-21-encountertype.md): [BfsMedstats21Encountertype](ValueSet-bfs-medstats-21-encountertype.md)
* [BFS Medizinische Statistik - 25 1.4.V02 - Hauptkostenträger für Grundversicherungsleistungen / Prise en charge des soins de base / Unità d’imputazione principale per le prestazioni dell’assicurazione di base](CodeSystem-bfs-medstats-25-mainguarantor.md): [MainGuarantor](ValueSet-mainguarantor.md)
* [BFS Medizinische Statistik - 27 1.5.V02 - Entscheid für Austritt / Décision de sortie / Décisione dell’uscita](CodeSystem-bfs-medstats-27-dischargedecision.md): [BfsMedstats27Dischargedecision](ValueSet-bfs-medstats-27-dischargedecision.md)
* [BFS Medizinische Statistik - 28 1.5.V03 - Aufenthalt nach Austritt / Séjour après la sortie / Destinazione dopo l’uscita](CodeSystem-bfs-medstats-28-dischargedestination.md): [BfsMedstats28Dischargedestination](ValueSet-bfs-medstats-28-dischargedestination.md)
* [BFS Medizinische Statistik - 29 1.5.V04 - Behandlung nach Austritt / Prise en charge après la sortie / Trattamento dopo l’uscita](CodeSystem-bfs-medstats-29-dischargeencounter.md): [BfsMedstats29Dischargeencounter](ValueSet-bfs-medstats-29-dischargeencounter.md)
* [eCH-010 Types](CodeSystem-ech-10.md): [ECH10AddressLine](ValueSet-ech-10-linetype.md)
* [eCH-011 Types](CodeSystem-ech-11.md): [ECH11FirstNameDataTypes](ValueSet-ech-11-firstnamedatatype.md) and [ECH11NameDataTypes](ValueSet-ech-11-namedatatype.md)
* [eCH-011 MaritalData Separation](CodeSystem-ech-11-maritaldata-separation.md): [ECH11MaritaldataSeparation](ValueSet-ech-11-maritaldata-separation.md)
* [eCH-011 MaritalStatus](CodeSystem-ech-11-maritalstatus.md): [ChCoreMaritalStatus](ValueSet-ch-core-maritalstatus.md) and [ECH11MaritalStatus](ValueSet-ech-11-maritalstatus.md)
* [eCH-011 Religion](CodeSystem-ech-11-religion.md): [ChCoreReligion](ValueSet-ch-core-religion.md)
* [eCH-011 Sex](CodeSystem-ech-11-sex.md): [ECH11Sex](ValueSet-ech-11-sex.md)
* [eCH-0046 Email Category](CodeSystem-ech-46-emailcategory.md): [ECH46EmailCategory](ValueSet-ech-46-emailcategory.md)
* [eCH-0046 Internet Category](CodeSystem-ech-46-internetcategory.md): [ECH46InternetCategory](ValueSet-ech-46-internetcategory.md)
* [eCH-0046 Phone Category](CodeSystem-ech-46-phonecategory.md): [ECH46PhoneCategory](ValueSet-ech-46-phonecategory.md)
* [eCH-0007 Canton Abbreviation incl. FL (Fürstentum Liechtenstein)](CodeSystem-ech-7-cantonflabbreviation.md): [ECH007CantonAbbreviation](ValueSet-ech-7-cantonabbreviation.md) and [VSECH007CantonFLAbbreviation](ValueSet-ech-7-cantonflabbreviation.md)
* [Main guarantor](CodeSystem-mainguarantor.md): [MainGuarantor](ValueSet-mainguarantor.md)
* [Condition Category](CodeSystem-ch-etoc-conditioncategory.md): [ConditionCategoryCodes](ValueSet-condition-category.md)
* [ServiceRequest Category](CodeSystem-servicerequest-category.md): [VSServiceRequestCategory](ValueSet-servicerequest-category.md)
* [CH VACD Old Swiss Vaccines](CodeSystem-ch-vacd-myvaccines-cs.md): [OldSwissVaccines](ValueSet-ch-vacd-oldswiss-vaccines-vs.md)
* [CH VACD Swiss Immunization Recommendation Categories](CodeSystem-ch-vacd-recommendation-categories-cs.md): [SwissImmunizationRecommendationCategories](ValueSet-ch-vacd-recommendation-categories-vs.md)
* [CH VACD Swiss Recommendation Forecast Status](CodeSystem-ch-vacd-recommendation-forecast-status-cs.md): [SwissRecommendationForecastStatus](ValueSet-ch-vacd-recommendation-forecast-status-vs.md)
* [CH VACD Swissmedic Authorized Vaccines](CodeSystem-ch-vacd-swissmedic-cs.md): [SwissMedicVaccines](ValueSet-ch-vacd-swissmedic-vaccines-vs.md)
* [CH VACD Swissmedic Authorized Immunsera Codes](CodeSystem-ch-vacd-swissmedic-immunesera-cs.md): [SwissImmunsera](ValueSet-ch-vacd-swissmedic-immunesera-vs.md)
* [CH VACD Swissmedic Authorized Immunoglobulin Codes](CodeSystem-ch-vacd-swissmedic-immunoglobulin-cs.md): [SwissImunoglobulin](ValueSet-ch-vacd-swissmedic-immunoglobulin-vs.md)
* [EDQM - Standard Terms](CodeSystem-edqm-standardterms.md): [AdministrationMethodEDQM](ValueSet-edqm-administrationmethod.md), [PharmaceuticalDoseFormEDQM](ValueSet-edqm-pharmaceuticaldoseform.md) and [RouteOfAdministrationEDQM](ValueSet-edqm-routeofadministration.md)
* [DICOM Unique Identifiers (UIDs)](CodeSystem-dcmuid.md): [DocumentEntryFormatCode](ValueSet-DocumentEntry.formatCode.md)
* [IHE Pharmaceutical Advice Status List](CodeSystem-ihe-pharmaceuticaladvicestatuslist.md): [IHEPharmaceuticalAdviceStatusList](ValueSet-ihe-pharmaceuticaladvicestatuslist.md)
* [ch-ehealth-codesystem-language](CodeSystem-2.16.756.5.30.1.127.3.10.12.md): [DocumentEntryLanguageCode](ValueSet-DocumentEntry.languageCode.md)
* [ch-ehealth-codesystem-agentRole](CodeSystem-2.16.756.5.30.1.127.3.10.14.md): [EprAgentRole](ValueSet-EprAgentRole.md)
* [ch-ehealth-codesystem-eprdeletionstatus](CodeSystem-2.16.756.5.30.1.127.3.10.18.md): [DocumentEntryExtEprDeletionStauts](ValueSet-DocumentEntry.Ext.EprDeletionStatus.md)
* [ch-ehealth-codesystem-purposeOfUse](CodeSystem-2.16.756.5.30.1.127.3.10.5.md): [EprPurposeOfUse](ValueSet-EprPurposeOfUse.md)
* [ch-ehealth-codesystem-role](CodeSystem-2.16.756.5.30.1.127.3.10.6.md): [DocumentEntryAuthorRole](ValueSet-DocumentEntry.authorRole.md), [DocumentEntryOriginalProviderRole](ValueSet-DocumentEntry.originalProviderRole.md), [EprRole](ValueSet-EprRole.md) and [SubmissionSetAuthorAuthorRole](ValueSet-SubmissionSet.Author.AuthorRole.md)
* [ch-ehealth-codesystem-atc](CodeSystem-2.16.756.5.30.1.127.3.10.7.md): [EprAuditTrailConsumptionEventType](ValueSet-EprAuditTrailConsumptionEventType.md)
* [ch-ehealth-codesystem-medreg](CodeSystem-2.16.756.5.30.1.127.3.5.md): [DocumentEntryAuthorSpeciality](ValueSet-DocumentEntry.authorSpeciality.md) and [HCProfessionalHcSpecialisation](ValueSet-HCProfessional.hcSpecialisation.md)
* [ch-ehealth-codesystem-nareg](CodeSystem-2.16.756.5.30.1.127.3.6.md): [DocumentEntryAuthorSpeciality](ValueSet-DocumentEntry.authorSpeciality.md)


* ISO maintains the copyright on the country codes, and controls its use carefully. For further details see the ISO 3166 web page: [https://www.iso.org/iso-3166-country-codes.html](https://www.iso.org/iso-3166-country-codes.html)

* [ISO 3166-1 Codes for the representation of names of countries and their subdivisions — Part 1: Country code](http://terminology.hl7.org/6.3.0/CodeSystem-ISO3166Part1.html): [AHVN13](NamingSystem-ahvn13.md), [ActSubstanceAdminSubstitutionCode](ValueSet-ActSubstanceAdminSubstitutionCode.md)...Show 131 more,[ActivePharmaceuticalIngredient](ValueSet-ActivePharmaceuticalIngredient.md),[AdministrationMethodEDQM](ValueSet-edqm-administrationmethod.md),[AllergyIntoleranceCategory](CodeSystem-allergyintolerance-category-supplement.md),[AllergyIntoleranceClinicalStatus](CodeSystem-allergyintolerance-clinical-supplement.md),[AllergyIntoleranceCriticalityStatus](CodeSystem-allergyintolerance-criticality-supplement.md),[AllergyIntoleranceSeverityStatus](CodeSystem-allergyintolerance-severity-supplement.md),[AllergyIntoleranceType](CodeSystem-allergyintolerance-type-supplement.md),[AllergyIntoleranceVerificationStatus](CodeSystem-allergyintolerance-verification-supplement.md),[BER](NamingSystem-ber.md),[BfsCountryCodes](ValueSet-bfs-country-codes.md),[BfsEncounterClassToFhir](ConceptMap-bfs-encounter-class-to-fhir.md),[BfsMedstats17Admitsource](ValueSet-bfs-medstats-17-admitsource.md),[BfsMedstats17Admittype](CodeSystem-bfs-medstats-18-admittype.md),[BfsMedstats18Admittype](ValueSet-bfs-medstats-18-admittype.md),[BfsMedstats19Admitrole](ValueSet-bfs-medstats-19-admitrole.md),[BfsMedstats20Encounterclass](ValueSet-bfs-medstats-20-encounterclass.md),[BfsMedstats21Encountertype](ValueSet-bfs-medstats-21-encountertype.md),[BfsMedstats25Mainguarantor](CodeSystem-bfs-medstats-25-mainguarantor.md),[BfsMedstats27Dischargedecision](ValueSet-bfs-medstats-27-dischargedecision.md),[BfsMedstats28Dischargedestination](ValueSet-bfs-medstats-28-dischargedestination.md),[BfsMedstats29Dischargeencounter](ValueSet-bfs-medstats-29-dischargeencounter.md),[CHAllergyIntoleranceConditionValueSet](ValueSet-CHAllergyIntoleranceConditionValueSet.md),[CHAllergyIntoleranceReactionManifestationValueSet](ValueSet-CHAllergyIntoleranceReactionManifestationValueSet.md),[CHAllergyIntoleranceReactionSubstanceValueSet](ValueSet-CHAllergyIntoleranceReactionSubstanceValueSet.md),[CHAllergyIntoleranceValueSet](ValueSet-CHAllergyIntoleranceValueSet.md),[CH_TERM](index.md),[CSECH007CantonFLAbbreviation](CodeSystem-ech-7-cantonflabbreviation.md),[CSServiceRequestCategory](CodeSystem-servicerequest-category.md),[ChCoreEncounterParticipationType](ValueSet-ch-core-encounter-participation-type.md),[ChCoreMaritalStatus](ValueSet-ch-core-maritalstatus.md),[ChCoreReligion](ValueSet-ch-core-religion.md),[ChEhealthCodesystemAgentRole](CodeSystem-2.16.756.5.30.1.127.3.10.14.md),[ChEhealthCodesystemAtc](CodeSystem-2.16.756.5.30.1.127.3.10.7.md),[ChEhealthCodesystemEprDeletionStatus](CodeSystem-2.16.756.5.30.1.127.3.10.18.md),[ChEhealthCodesystemFormat](CodeSystem-2.16.756.5.30.1.127.3.10.10.md),[ChEhealthCodesystemHpd](CodeSystem-2.16.756.5.30.1.127.3.10.9.md),[ChEhealthCodesystemLanguage](CodeSystem-2.16.756.5.30.1.127.3.10.12.md),[ChEhealthCodesystemMedreg](CodeSystem-2.16.756.5.30.1.127.3.5.md),[ChEhealthCodesystemNareg](CodeSystem-2.16.756.5.30.1.127.3.6.md),[ChEhealthCodesystemPurposeOfUse](CodeSystem-2.16.756.5.30.1.127.3.10.5.md),[ChEhealthCodesystemRole](CodeSystem-2.16.756.5.30.1.127.3.10.6.md),[ChEtocConditionCategory](CodeSystem-ch-etoc-conditioncategory.md),[ChVacdTargetDiseasesAndIllnessesUndergoneForImmunization](ValueSet-ch-vacd-targetdiseasesandillnessesundergoneforimmunization-vs.md),[ConditionCategoryCodes](ValueSet-condition-category.md),[DCMUID](CodeSystem-dcmuid.md),[DocumentEntryAuthorRole](ValueSet-DocumentEntry.authorRole.md),[DocumentEntryAuthorSpeciality](ValueSet-DocumentEntry.authorSpeciality.md),[DocumentEntryClassCode](ValueSet-DocumentEntry.classCode.md),[DocumentEntryClassCodeToDocumentEntryTypeCode](ConceptMap-DocumentEntryClassCodeToDocumentEntryTypeCode.md),[DocumentEntryConfidentialityCode](ValueSet-DocumentEntry.confidentialityCode.md),[DocumentEntryConfidentialityCodeToFHIRMapping](ConceptMap-documententry-confidentialitycode-to-fhir.md),[DocumentEntryEventCodeList](ValueSet-DocumentEntry.eventCodeList.md),[DocumentEntryExtEprDeletionStauts](ValueSet-DocumentEntry.Ext.EprDeletionStatus.md),[DocumentEntryFormatCode](ValueSet-DocumentEntry.formatCode.md),[DocumentEntryHealthcareFacilityTypeCode](ValueSet-DocumentEntry.healthcareFacilityTypeCode.md),[DocumentEntryLanguageCode](ValueSet-DocumentEntry.languageCode.md),[DocumentEntryMimeType](ValueSet-DocumentEntry.mimeType.md),[DocumentEntryOriginalProviderRole](ValueSet-DocumentEntry.originalProviderRole.md),[DocumentEntryPracticeSettingCode](ValueSet-DocumentEntry.practiceSettingCode.md),[DocumentEntrySourcePatientInfoPID8](ValueSet-DocumentEntry.sourcePatientInfo.PID-8.md),[DocumentEntryTypeCode](ValueSet-DocumentEntry.typeCode.md),[ECH007CantonAbbreviation](ValueSet-ech-7-cantonabbreviation.md),[ECH10AddressLine](ValueSet-ech-10-linetype.md),[ECH11CodeSystem](CodeSystem-ech-11.md),[ECH11FirstNameDataTypes](ValueSet-ech-11-firstnamedatatype.md),[ECH11MaritalStatus](ValueSet-ech-11-maritalstatus.md),[ECH11MaritaldataSeparation](ValueSet-ech-11-maritaldata-separation.md),[ECH11NameDataTypes](ValueSet-ech-11-namedatatype.md),[ECH11Religion](CodeSystem-ech-11-religion.md),[ECH11Sex](ValueSet-ech-11-sex.md),[ECH11maritalstatus](CodeSystem-ech-11-maritalstatus.md),[ECH11sex](CodeSystem-ech-11-sex.md),[ECH46EmailCategory](ValueSet-ech-46-emailcategory.md),[ECH46EmailCategoryToFHIRMapping](ConceptMap-ech-46-emailcategory-to-fhir.md),[ECH46InternetCategory](ValueSet-ech-46-internetcategory.md),[ECH46InternetCategoryToFHIRMapping](ConceptMap-ech-46-internetcategory-to-fhir.md),[ECH46PhoneCategory](ValueSet-ech-46-phonecategory.md),[ECH46PhoneCategoryToFHIRMapping](ConceptMap-ech-46-phonecategory-to-fhir.md),[EPR_SPID](NamingSystem-epr-spid.md),[EdqmStandardTerms](CodeSystem-edqm-standardterms.md),[EprAgentRole](ValueSet-EprAgentRole.md),[EprAuditTrailConsumptionEventType](ValueSet-EprAuditTrailConsumptionEventType.md),[EprPurposeOfUse](ValueSet-EprPurposeOfUse.md),[EprRole](ValueSet-EprRole.md),[EventTiming](CodeSystem-event-timing.md),[ForumDatenaustauschTariffType](NamingSystem-forum-datenaustausch-tariff.md),[GLN](NamingSystem-gln.md),[GTIN](NamingSystem-gtin.md),[HCProfessionalHCProfessionSpecialisationMap](ConceptMap-HCProfessionalHCProfessionSpecialisationMap.md),[HCProfessionalHcProfession](ValueSet-HCProfessional.hcProfession.md),[HCProfessionalHcSpecialisation](ValueSet-HCProfessional.hcSpecialisation.md),[IHEPharmaceuticalAdviceStatusList](ValueSet-ihe-pharmaceuticaladvicestatuslist.md),[ImmunGlobulineToTargetDiseaseMapping](ConceptMap-ch-vacd-immunoglobulin-targetdiseases-cm.md),[InsuranceCardNumber](NamingSystem-veka.md),[MainGuarantor](ValueSet-mainguarantor.md),[Mainguarantor](CodeSystem-mainguarantor.md),[MaritalStatusECH011ToFHIRMapping](ConceptMap-maritalstatus-ech11-to-fhir.md),[OldSwissVaccines](ValueSet-ch-vacd-oldswiss-vaccines-vs.md),[OldSwissVaccinesCodesystem](CodeSystem-ch-vacd-myvaccines-cs.md),[PharmaceuticalDoseFormEDQM](ValueSet-edqm-pharmaceuticaldoseform.md),[RouteOfAdministrationEDQM](ValueSet-edqm-routeofadministration.md),[RouteOfAdministrationImmunization](ValueSet-ch-vacd-route-of-administration-vs.md),[SexECH011ToFHIRMapping](ConceptMap-sex-ech11-to-fhir.md),[SnomedCTConceptViralDiseases](ValueSet-snomedct-concept-viraldiseases-vs.md),[SnomedCTForVaccineCode](ValueSet-ch-vacd-vaccines-snomedct-vs.md),[SnomedCTVaccineCodeToTargetDiseaseMapping](ConceptMap-ch-vacd-vaccines-sct-targetdiseases-cm.md),[SubmissionSetAuthorAuthorRole](ValueSet-SubmissionSet.Author.AuthorRole.md),[SubmissionSetContentTypeCode](ValueSet-SubmissionSet.contentTypeCode.md),[SwissImmunizationRecommendationCategories](ValueSet-ch-vacd-recommendation-categories-vs.md),[SwissImmunizationRecommendationCategoriesCodesystem](CodeSystem-ch-vacd-recommendation-categories-cs.md),[SwissImmunsera](ValueSet-ch-vacd-swissmedic-immunesera-vs.md),[SwissImunoglobulin](ValueSet-ch-vacd-swissmedic-immunoglobulin-vs.md),[SwissMedicAuthorizedImmuneseraCodesystem](CodeSystem-ch-vacd-swissmedic-immunesera-cs.md),[SwissMedicAuthorizedImmunoGlobulinCodesystem](CodeSystem-ch-vacd-swissmedic-immunoglobulin-cs.md),[SwissMedicAuthorizedVaccinesCodesystem](CodeSystem-ch-vacd-swissmedic-cs.md),[SwissMedicVaccines](ValueSet-ch-vacd-swissmedic-vaccines-vs.md),[SwissRecommendationForecastStatus](ValueSet-ch-vacd-recommendation-forecast-status-vs.md),[SwissRecommendationForecastStatusCodesystem](CodeSystem-ch-vacd-recommendation-forecast-status-cs.md),[SwissVaccinationPlanImmunizations](ValueSet-ch-vacd-ch-vaccination-plan-immunizations-vs.md),[SwissVaccines](ValueSet-ch-vacd-vaccines-vs.md),[TargetDiseaseToVaccineCodeMapping](ConceptMap-ch-vacd-targetdiseases-vaccines-cm.md),[TimingEvent](CodeSystem-v3-TimingEvent.md),[TreatmentReason](ValueSet-treatmentreason.md),[UIDB](NamingSystem-uidb.md),[UnitCode](ValueSet-UnitCode.md),[VSECH007CantonFLAbbreviation](ValueSet-ech-7-cantonflabbreviation.md),[VSServiceRequestCategory](ValueSet-servicerequest-category.md),[VaccineCodeSCTToVaccineCodeSM](ConceptMap-ch-vacd-vaccines-sct-sm-cm.md),[VaccineCodeSMToVaccineCodeSCT](ConceptMap-ch-vacd-vaccines-sm-sct-cm.md),[VaccineCodeToTargetDiseaseMapping](ConceptMap-ch-vacd-vaccines-targetdiseases-cm.md)and[ZSR](NamingSystem-zsr.md)


* Some content from IHE® Copyright © 2015 [IHE International, Inc](http://www.ihe.net/Governance/#Intellectual_Property) .

* [IHE Format Code set for use with Document Sharing](https://profiles.ihe.net/fhir/ihe.formatcode.fhir/1.4.0/CodeSystem-formatcode.html): [DocumentEntryFormatCode](ValueSet-DocumentEntry.formatCode.md)


* The UCUM codes, UCUM table (regardless of format), and UCUM Specification are copyright 1999-2009, Regenstrief Institute, Inc. and the Unified Codes for Units of Measures (UCUM) Organization. All rights reserved. [https://ucum.org/trac/wiki/TermsOfUse](https://ucum.org/trac/wiki/TermsOfUse)

* [Unified Code for Units of Measure (UCUM)](http://terminology.hl7.org/6.3.0/CodeSystem-v3-ucum.html): [UnitCode](ValueSet-UnitCode.md)


* These codes are excerpted from Digital Imaging and Communications in Medicine (DICOM) Standard, Part 16: Content Mapping Resource, Copyright © 2011 by the National Electrical Manufacturers Association.

* [DICOM Controlled Terminology Definitions](http://hl7.org/fhir/R4/codesystem-dicom-dcim.html): [DocumentEntryEventCodeList](ValueSet-DocumentEntry.eventCodeList.md)


* This artefact includes content from SNOMED Clinical Terms® (SNOMED CT®) which is copyright of the International Health Terminology Standards Development Organisation (IHTSDO). Implementers of these artefacts must have the appropriate SNOMED CT Affiliate license - for more information contact [http://www.snomed.org/snomed-ct/getsnomed-ct](http://www.snomed.org/snomed-ct/getsnomed-ct) or info@snomed.org.

* [ch-ehealth-codesystem-format](CodeSystem-2.16.756.5.30.1.127.3.10.10.md): [DocumentEntryFormatCode](ValueSet-DocumentEntry.formatCode.md)
* [ch-ehealth-codesystem-hpd](CodeSystem-2.16.756.5.30.1.127.3.10.9.md): [HCProfessionalHcProfession](ValueSet-HCProfessional.hcProfession.md)


* This material contains content that is copyright of SNOMED International. Implementers of these specifications must have the appropriate SNOMED CT Affiliate license - for more information contact [https://www.snomed.org/get-snomed](https://www.snomed.org/get-snomed) or [info@snomed.org](mailto:info@snomed.org).

* [SNOMED Clinical Terms&reg; (SNOMED CT&reg;)](http://tx.fhir.org/r4/ValueSet/snomedct): [ActivePharmaceuticalIngredient](ValueSet-ActivePharmaceuticalIngredient.md), [CHAllergyIntoleranceConditionValueSet](ValueSet-CHAllergyIntoleranceConditionValueSet.md)...Show 18 more,[CHAllergyIntoleranceReactionManifestationValueSet](ValueSet-CHAllergyIntoleranceReactionManifestationValueSet.md),[CHAllergyIntoleranceReactionSubstanceValueSet](ValueSet-CHAllergyIntoleranceReactionSubstanceValueSet.md),[CHAllergyIntoleranceValueSet](ValueSet-CHAllergyIntoleranceValueSet.md),[ChVacdTargetDiseasesAndIllnessesUndergoneForImmunization](ValueSet-ch-vacd-targetdiseasesandillnessesundergoneforimmunization-vs.md),[DocumentEntryClassCode](ValueSet-DocumentEntry.classCode.md),[DocumentEntryConfidentialityCode](ValueSet-DocumentEntry.confidentialityCode.md),[DocumentEntryHealthcareFacilityTypeCode](ValueSet-DocumentEntry.healthcareFacilityTypeCode.md),[DocumentEntryPracticeSettingCode](ValueSet-DocumentEntry.practiceSettingCode.md),[DocumentEntryTypeCode](ValueSet-DocumentEntry.typeCode.md),[HCProfessionalHcProfession](ValueSet-HCProfessional.hcProfession.md),[SnomedCTConceptViralDiseases](ValueSet-snomedct-concept-viraldiseases-vs.md),[SnomedCTForVaccineCode](ValueSet-ch-vacd-vaccines-snomedct-vs.md),[SubmissionSetContentTypeCode](ValueSet-SubmissionSet.contentTypeCode.md),[SwissImmunizationRecommendationCategories](ValueSet-ch-vacd-recommendation-categories-vs.md),[SwissVaccinationPlanImmunizations](ValueSet-ch-vacd-ch-vaccination-plan-immunizations-vs.md),[SwissVaccines](ValueSet-ch-vacd-vaccines-vs.md),[TreatmentReason](ValueSet-treatmentreason.md)and[UnitCode](ValueSet-UnitCode.md)


* This material derives from the HL7 Terminology (THO). THO is copyright ©1989+ Health Level Seven International and is made available under the CC0 designation. For more licensing information see: [https://terminology.hl7.org/license.html](https://terminology.hl7.org/license.html)

* [AllergyIntolerance Clinical Status Codes](http://terminology.hl7.org/7.0.1/CodeSystem-allergyintolerance-clinical.html): [AllergyIntoleranceClinicalStatus](CodeSystem-allergyintolerance-clinical-supplement.md)
* [AllergyIntolerance Verification Status](http://terminology.hl7.org/7.0.1/CodeSystem-allergyintolerance-verification.html): [AllergyIntoleranceVerificationStatus](CodeSystem-allergyintolerance-verification-supplement.md)
* [identifierType](http://terminology.hl7.org/7.0.1/CodeSystem-v2-0203.html): [AHVN13](NamingSystem-ahvn13.md) and [EPR_SPID](NamingSystem-epr-spid.md)
* [ParticipationFunction](http://terminology.hl7.org/7.0.1/CodeSystem-v3-ParticipationFunction.html): [ChCoreEncounterParticipationType](ValueSet-ch-core-encounter-participation-type.md)
* [TimingEvent](http://terminology.hl7.org/7.0.1/CodeSystem-v3-TimingEvent.html): [TimingEvent](CodeSystem-v3-TimingEvent.md)
* [Substance Admin Substitution](http://terminology.hl7.org/7.0.1/CodeSystem-v3-substanceAdminSubstitution.html): [ActSubstanceAdminSubstitutionCode](ValueSet-ActSubstanceAdminSubstitutionCode.md)


* Unless otherwise indicated, reproduction of material posted on Council of Europe websites, and reproduction of photographs for which the Council of Europe holds copyright – see legal notice \“photo credits\” – is authorised for private use and for informational and educational uses relating to the Council of Europe’s work. This authorisation is subject to the condition that the source be indicated and no charge made for reproduction. Persons wishing to make some other use than those specified above, including commercial use, of information and text posted on these sites are asked to apply for prior written authorisation to the Council of Europe, Directorate of Communication.

* [EDQM Standard Terms](http://tx.fhir.org/r4/ValueSet/edqm): [RouteOfAdministrationImmunization](ValueSet-ch-vacd-route-of-administration-vs.md)


### Cross Version Analysis

This is an R4 IG. None of the features it uses are changed in R4B, so it can be used as is with R4B systems. Packages for both [R4 (ch.fhir.ig.ch-term.r4)](package.r4.tgz) and [R4B (ch.fhir.ig.ch-term.r4b)](package.r4b.tgz) are available.

### Dependency Table




### Globals Table

*There are no Global profiles defined*

### Disclaimer

HL7 SWITZERLAND PROVIDES THE DATA HEREUNDER AS IS WITHOUT WARRANTY WHATSOEVER. HL7 SWITZERLAND DOES NOT WARRANT OR REPRESENT THAT ANY DATA PROVIDED IN THIS IMPLEMENTATION GUIDE IS CORRECT. IT IS PROVIDED WITHOUT ANY WARRANTY WHATSOEVER, WHETHER EXPRESS, IMPLIED OR OTHERWISE, REGARDING ITS ACCURACY, COMPLETENESS NONINFRINGEMENT OF INTELLECTUAL PROPERTY. USE AT YOUR OWN RISK!



## Resource Content

```json
{
  "resourceType" : "ImplementationGuide",
  "id" : "ch.fhir.ig.ch-term",
  "url" : "http://fhir.ch/ig/ch-term/ImplementationGuide/ch.fhir.ig.ch-term",
  "version" : "3.3.0",
  "name" : "CH_TERM",
  "title" : "CH Term (R4)",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-15",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/"
        }
      ]
    },
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "Implementation Guide for Swiss Terminology",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "packageId" : "ch.fhir.ig.ch-term",
  "license" : "CC0-1.0",
  "fhirVersion" : ["4.0.1"],
  "dependsOn" : [
    {
      "id" : "hl7ext",
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/implementationguide-dependency-comment",
          "valueMarkdown" : "Automatically added as a dependency - all IGs depend on the HL7 Extension Pack"
        }
      ],
      "uri" : "http://hl7.org/fhir/extensions/ImplementationGuide/hl7.fhir.uv.extensions",
      "packageId" : "hl7.fhir.uv.extensions.r4",
      "version" : "5.2.0"
    },
    {
      "id" : "ihe_formatcode_fhir",
      "uri" : "https://profiles.ihe.net/fhir/ihe.formatcode.fhir/ImplementationGuide/ihe.formatcode.fhir",
      "packageId" : "ihe.formatcode.fhir",
      "version" : "1.4.0"
    },
    {
      "id" : "hl7_terminology_r4",
      "uri" : "http://terminology.hl7.org/ImplementationGuide/hl7.terminology",
      "packageId" : "hl7.terminology.r4",
      "version" : "7.0.1"
    }
  ],
  "definition" : {
    "extension" : [
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "copyrightyear"
          },
          {
            "url" : "value",
            "valueString" : "2019+"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "releaselabel"
          },
          {
            "url" : "value",
            "valueString" : "trial-use"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "excludettl"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "allow-extensible-warnings"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "display-warnings"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-expansion-params"
          },
          {
            "url" : "value",
            "valueString" : "../../expansion-params.json"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "pin-canonicals"
          },
          {
            "url" : "value",
            "valueString" : "pin-multiples"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "urn:oid:2.16.756.5.30.1.127.3.5"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "urn:oid:2.16.756.5.30.1.127.3.6"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "urn:oid:2.16.756.5.30.1.127.3.10.6"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "urn:oid:2.16.756.5.30.1.127.3.10.9"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "urn:oid:2.16.756.5.30.1.127.3.10.10"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "urn:oid:2.16.756.5.30.1.127.3.10.12"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "urn:oid:2.16.756.5.30.1.127.3.10.14"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "urn:oid:2.16.756.5.30.1.127.3.10.18"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "urn:oid:2.16.756.5.30.1.127.3.10.5"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "urn:oid:2.16.756.5.30.1.127.3.10.7"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "urn:oid:0.4.0.127.0.16.1.1.2.1"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "urn:oid:1.3.6.1.4.1.19376.1.9.2.1"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "urn:oid:1.2.840.10008.2.6.1"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-7-cantonflabbreviation"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-17-admitsource"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-18-admittype"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-19-admitrole"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-20-encounterclass"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-21-encountertype"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-25-mainguarantor"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/CodeSystem/mainguarantor"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-27-dischargedecision"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-28-dischargedestination"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-29-dischargeencounter"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-10"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-11"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-11-maritaldata-separation"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-11-maritalstatus"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-11-sex"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-11-religion"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-46-emailcategory"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-46-internetcategory"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-46-phonecategory"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ConceptMap/bfs-encounter-class-to-fhir"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ConceptMap/documententry-confidentialitycode-to-fhir"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ConceptMap/ech-46-emailcategory-to-fhir"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ConceptMap/ech-46-internetcategory-to-fhir"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ConceptMap/ech-46-phonecategory-to-fhir"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ConceptMap/maritalstatus-ech11-to-fhir"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ConceptMap/sex-ech11-to-fhir"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ValueSet/ech-7-cantonabbreviation"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ValueSet/ech-7-cantonflabbreviation"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ValueSet/bfs-medstats-17-admitsource"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ValueSet/bfs-medstats-18-admittype"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ValueSet/bfs-medstats-19-admitrole"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ValueSet/bfs-medstats-20-encounterclass"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ValueSet/bfs-medstats-21-encountertype"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ValueSet/mainguarantor"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ValueSet/bfs-medstats-27-dischargedecision"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ValueSet/bfs-medstats-28-dischargedestination"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ValueSet/bfs-medstats-29-dischargeencounter"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ValueSet/ch-core-encounter-participation-type"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ValueSet/ch-core-maritalstatus"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ValueSet/ch-core-religion"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ValueSet/ech-10-linetype"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ValueSet/ech-11-firstnamedatatype"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ValueSet/ech-11-maritaldata-separation"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ValueSet/ech-11-maritalstatus"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ValueSet/ech-11-namedatatype"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ValueSet/ech-11-sex"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ValueSet/ech-46-emailcategory"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ValueSet/ech-46-internetcategory"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ValueSet/ech-46-phonecategory"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-allergyintolerance/CodeSystem/allergyintolerance-category-supplement"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-allergyintolerance/CodeSystem/allergyintolerance-clinical-supplement"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-allergyintolerance/CodeSystem/allergyintolerance-criticality-supplement"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-allergyintolerance/CodeSystem/allergyintolerance-severity-supplement"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-allergyintolerance/CodeSystem/allergyintolerance-type-supplement"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-allergyintolerance/CodeSystem/allergyintolerance-verification-supplement"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-allergyintolerance/ValueSet/CHAllergyIntoleranceConditionValueSet"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-allergyintolerance/ValueSet/CHAllergyIntoleranceReactionManifestationValueSet"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-allergyintolerance/ValueSet/CHAllergyIntoleranceReactionSubstanceValueSet"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-allergyintolerance/ValueSet/CHAllergyIntoleranceValueSet"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-swissmedic-cs"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-myvaccines-cs"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-recommendation-categories-cs"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-recommendation-forecast-status-cs"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-swissmedic-immunoglobulin-cs"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-swissmedic-immunesera-cs"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-route-of-administration-vs"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-targetdiseasesandillnessesundergoneforimmunization-vs"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-vaccines-snomedct-vs"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-oldswiss-vaccines-vs"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-swissmedic-vaccines-vs"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-vaccines-vs"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-ch-vaccination-plan-immunizations-vs"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-recommendation-categories-vs"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-recommendation-forecast-status-vs"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-swissmedic-immunoglobulin-vs"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-swissmedic-immunesera-vs"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-vacd/ConceptMap/ch-vacd-targetdiseases-vaccines-cm"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-vacd/ConceptMap/ch-vacd-vaccines-sct-sm-cm"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-vacd/ConceptMap/ch-vacd-vaccines-sct-targetdiseases-cm"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-vacd/ConceptMap/ch-vacd-vaccines-sm-sct-cm"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-vacd/ConceptMap/ch-vacd-vaccines-targetdiseases-cm"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-vacd/ConceptMap/ch-vacd-immunoglobulin-targetdiseases-cm"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-etoc/CodeSystem/ch-etoc-conditioncategory"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "autoload-resources"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-liquid"
          },
          {
            "url" : "value",
            "valueString" : "template/liquid"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-liquid"
          },
          {
            "url" : "value",
            "valueString" : "input/liquid"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-qa"
          },
          {
            "url" : "value",
            "valueString" : "temp/qa"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-temp"
          },
          {
            "url" : "value",
            "valueString" : "temp/pages"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-output"
          },
          {
            "url" : "value",
            "valueString" : "output"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-suppressed-warnings"
          },
          {
            "url" : "value",
            "valueString" : "input/ignoreWarnings.txt"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-history"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-term/history.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "template-html"
          },
          {
            "url" : "value",
            "valueString" : "template-page.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "template-md"
          },
          {
            "url" : "value",
            "valueString" : "template-page-md.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-contact"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-context"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-copyright"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-jurisdiction"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-license"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-publisher"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-version"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-wg"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "active-tables"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "fmm-definition"
          },
          {
            "url" : "value",
            "valueString" : "http://hl7.org/fhir/versions.html#maturity"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "propagate-status"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "excludelogbinaryformat"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "tabbed-snapshots"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
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
        "valueCode" : "hl7.fhir.uv.tools.r4#0.8.0"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "copyrightyear"
          },
          {
            "url" : "value",
            "valueString" : "2019+"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "releaselabel"
          },
          {
            "url" : "value",
            "valueString" : "trial-use"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "excludettl"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "allow-extensible-warnings"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "display-warnings"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-expansion-params"
          },
          {
            "url" : "value",
            "valueString" : "../../expansion-params.json"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "pin-canonicals"
          },
          {
            "url" : "value",
            "valueString" : "pin-multiples"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "urn:oid:2.16.756.5.30.1.127.3.5"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "urn:oid:2.16.756.5.30.1.127.3.6"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "urn:oid:2.16.756.5.30.1.127.3.10.6"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "urn:oid:2.16.756.5.30.1.127.3.10.9"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "urn:oid:2.16.756.5.30.1.127.3.10.10"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "urn:oid:2.16.756.5.30.1.127.3.10.12"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "urn:oid:2.16.756.5.30.1.127.3.10.14"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "urn:oid:2.16.756.5.30.1.127.3.10.18"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "urn:oid:2.16.756.5.30.1.127.3.10.5"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "urn:oid:2.16.756.5.30.1.127.3.10.7"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "urn:oid:0.4.0.127.0.16.1.1.2.1"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "urn:oid:1.3.6.1.4.1.19376.1.9.2.1"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "urn:oid:1.2.840.10008.2.6.1"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-7-cantonflabbreviation"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-17-admitsource"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-18-admittype"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-19-admitrole"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-20-encounterclass"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-21-encountertype"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-25-mainguarantor"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/CodeSystem/mainguarantor"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-27-dischargedecision"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-28-dischargedestination"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-29-dischargeencounter"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-10"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-11"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-11-maritaldata-separation"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-11-maritalstatus"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-11-sex"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-11-religion"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-46-emailcategory"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-46-internetcategory"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-46-phonecategory"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ConceptMap/bfs-encounter-class-to-fhir"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ConceptMap/documententry-confidentialitycode-to-fhir"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ConceptMap/ech-46-emailcategory-to-fhir"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ConceptMap/ech-46-internetcategory-to-fhir"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ConceptMap/ech-46-phonecategory-to-fhir"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ConceptMap/maritalstatus-ech11-to-fhir"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ConceptMap/sex-ech11-to-fhir"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ValueSet/ech-7-cantonabbreviation"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ValueSet/ech-7-cantonflabbreviation"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ValueSet/bfs-medstats-17-admitsource"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ValueSet/bfs-medstats-18-admittype"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ValueSet/bfs-medstats-19-admitrole"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ValueSet/bfs-medstats-20-encounterclass"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ValueSet/bfs-medstats-21-encountertype"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ValueSet/mainguarantor"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ValueSet/bfs-medstats-27-dischargedecision"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ValueSet/bfs-medstats-28-dischargedestination"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ValueSet/bfs-medstats-29-dischargeencounter"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ValueSet/ch-core-encounter-participation-type"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ValueSet/ch-core-maritalstatus"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ValueSet/ch-core-religion"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ValueSet/ech-10-linetype"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ValueSet/ech-11-firstnamedatatype"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ValueSet/ech-11-maritaldata-separation"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ValueSet/ech-11-maritalstatus"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ValueSet/ech-11-namedatatype"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ValueSet/ech-11-sex"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ValueSet/ech-46-emailcategory"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ValueSet/ech-46-internetcategory"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-core/ValueSet/ech-46-phonecategory"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-allergyintolerance/CodeSystem/allergyintolerance-category-supplement"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-allergyintolerance/CodeSystem/allergyintolerance-clinical-supplement"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-allergyintolerance/CodeSystem/allergyintolerance-criticality-supplement"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-allergyintolerance/CodeSystem/allergyintolerance-severity-supplement"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-allergyintolerance/CodeSystem/allergyintolerance-type-supplement"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-allergyintolerance/CodeSystem/allergyintolerance-verification-supplement"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-allergyintolerance/ValueSet/CHAllergyIntoleranceConditionValueSet"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-allergyintolerance/ValueSet/CHAllergyIntoleranceReactionManifestationValueSet"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-allergyintolerance/ValueSet/CHAllergyIntoleranceReactionSubstanceValueSet"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-allergyintolerance/ValueSet/CHAllergyIntoleranceValueSet"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-swissmedic-cs"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-myvaccines-cs"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-recommendation-categories-cs"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-recommendation-forecast-status-cs"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-swissmedic-immunoglobulin-cs"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-swissmedic-immunesera-cs"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-route-of-administration-vs"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-targetdiseasesandillnessesundergoneforimmunization-vs"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-vaccines-snomedct-vs"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-oldswiss-vaccines-vs"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-swissmedic-vaccines-vs"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-vaccines-vs"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-ch-vaccination-plan-immunizations-vs"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-recommendation-categories-vs"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-recommendation-forecast-status-vs"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-swissmedic-immunoglobulin-vs"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-swissmedic-immunesera-vs"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-vacd/ConceptMap/ch-vacd-targetdiseases-vaccines-cm"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-vacd/ConceptMap/ch-vacd-vaccines-sct-sm-cm"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-vacd/ConceptMap/ch-vacd-vaccines-sct-targetdiseases-cm"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-vacd/ConceptMap/ch-vacd-vaccines-sm-sct-cm"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-vacd/ConceptMap/ch-vacd-vaccines-targetdiseases-cm"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-vacd/ConceptMap/ch-vacd-immunoglobulin-targetdiseases-cm"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-etoc/CodeSystem/ch-etoc-conditioncategory"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "autoload-resources"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-liquid"
          },
          {
            "url" : "value",
            "valueString" : "template/liquid"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-liquid"
          },
          {
            "url" : "value",
            "valueString" : "input/liquid"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-qa"
          },
          {
            "url" : "value",
            "valueString" : "temp/qa"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-temp"
          },
          {
            "url" : "value",
            "valueString" : "temp/pages"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-output"
          },
          {
            "url" : "value",
            "valueString" : "output"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-suppressed-warnings"
          },
          {
            "url" : "value",
            "valueString" : "input/ignoreWarnings.txt"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-history"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-term/history.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "template-html"
          },
          {
            "url" : "value",
            "valueString" : "template-page.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "template-md"
          },
          {
            "url" : "value",
            "valueString" : "template-page-md.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-contact"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-context"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-copyright"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-jurisdiction"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-license"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-publisher"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-version"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-wg"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "active-tables"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "fmm-definition"
          },
          {
            "url" : "value",
            "valueString" : "http://hl7.org/fhir/versions.html#maturity"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "propagate-status"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "excludelogbinaryformat"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "tabbed-snapshots"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      }
    ],
    "resource" : [
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ActivePharmaceuticalIngredient"
        },
        "name" : "ActivePharmaceuticalIngredient",
        "description" : "ActivePharmaceuticalIngredient",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ActSubstanceAdminSubstitutionCode"
        },
        "name" : "ActSubstanceAdminSubstitutionCode",
        "description" : "ActSubstanceAdminSubstitutionCode",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "NamingSystem"
          }
        ],
        "reference" : {
          "reference" : "NamingSystem/ahvn13"
        },
        "name" : "AHVN13",
        "description" : "The AHVN13 / NAVS13 - (abbreviation for new thirteen-digit Social Security number) - is an administrative identifier for natural persons in Switzerland. It is issued, announced and administered by the [Central Compensation Office](https://www.zas.admin.ch/zas/de/home/partenaires-et-institutions-/navs13.html). It is available to all organisations and communities for which there is a legal basis. The AHVN13 / NAVS13 shall not contain point characters for separation.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "NamingSystem"
          }
        ],
        "reference" : {
          "reference" : "NamingSystem/ber"
        },
        "name" : "BER",
        "description" : "The Business and Enterprise Register (BER) contains all enterprises and business in private and public law which are domiciled and exercise an economic activity in Switzerland.\n                      French: (REE) Registre des entreprises et des établissements. \n                      German: (BUR) Betriebs- und Unternehmensregister,\n                      Italian: (RIS) Registro delle imprese e degli stabilimenti.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ConceptMap"
          }
        ],
        "reference" : {
          "reference" : "ConceptMap/bfs-encounter-class-to-fhir"
        },
        "name" : "BFS Encounter Class to FHIR mapping",
        "description" : "BFS Encounter Class to FHIR mapping",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/bfs-medstats-17-admitsource"
        },
        "name" : "BFS Medizinische Statistik - 17 1.2.V02 - Aufenthaltsort vor dem Eintritt / Séjour avant l’admission / Luogo di soggiorno prima dell’ammissione",
        "description" : "BFS defines variables for medical statistic (german, french, italian) see [BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Unmittelbarer Aufenthaltsort vor dem Eintritt. Wo befand sich der Patient / die Patientin?",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/bfs-medstats-17-admitsource"
        },
        "name" : "BFS Medizinische Statistik - 17 1.2.V02 - Aufenthaltsort vor dem Eintritt / Séjour avant l’admission / Luogo di soggiorno prima dell’ammissione",
        "description" : "BFS defines variables for medical statistic (german, french, italian) see [BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Unmittelbarer Aufenthaltsort vor dem Eintritt. Wo befand sich BFS der Patient / die Patientin?",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/bfs-medstats-18-admittype"
        },
        "name" : "BFS Medizinische Statistik - 18 1.2.V03 - Eintrittsart / Mode d’admission / Genere di ricovero",
        "description" : "BFS defines variables for medical statistic (german, french, italian) see [BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Beschreibung der Umstände des Eintritts. Wie wurde der Patient / die Patientin aufgenommen?",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/bfs-medstats-18-admittype"
        },
        "name" : "BFS Medizinische Statistik - 18 1.2.V03 - Eintrittsart / Mode d’admission / Genere di ricovero",
        "description" : "BFS defines variables for medical statistic (german, french, italian) see [BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Beschreibung der Umstände des Eintritts. Wie wurde der BFS Patient / die Patientin aufgenommen?",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/bfs-medstats-19-admitrole"
        },
        "name" : "BFS Medizinische Statistik - 19 1.2.V04 - Einweisende Instanz / Décision d’envoi / Istanza ricoverante",
        "description" : "BFS defines variables for medical statistic (german, french, italian) see [BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Wer hat die Initiative für die Klinikeinweisung ergriffen?",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/bfs-medstats-19-admitrole"
        },
        "name" : "BFS Medizinische Statistik - 19 1.2.V04 - Einweisende Instanz / Décision d’envoi / Istanza ricoverante",
        "description" : "BFS defines variables for medical statistic (german, french, italian) see [BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Unmittelbarer Aufenthaltsort vor dem Eintritt. Wo befand sich BFS der Patient / die Patientin?",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/bfs-medstats-20-encounterclass"
        },
        "name" : "BFS Medizinische Statistik - 20 1.3.V01 - Behandlungsart / Type de prise en charge / Genere di trattamento",
        "description" : "BFS defines variables for medical statistic (german, french, italian) see [BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Angabe der Behandlungsart",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/bfs-medstats-20-encounterclass"
        },
        "name" : "BFS Medizinische Statistik - 20 1.3.V01 - Behandlungsart / Type de prise en charge / Genere di trattamento",
        "description" : "BFS defines variables for medical statistic (german, french, italian) see [BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Angabe der Behandlungsart",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/bfs-medstats-21-encountertype"
        },
        "name" : "BFS Medizinische Statistik - 21 1.3.V02 - Klasse / Classe / Classe",
        "description" : "BFS defines variables for medical statistic (german, french, italian) see [BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Im Rahmen des Spitalaufenthaltes belegte Liegeklasse, nicht die Versicherungskategorie. Bei Wechsel der Klasse ist die im Wesentlichen beanspruchte Klasse anzugeben.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/bfs-medstats-21-encountertype"
        },
        "name" : "BFS Medizinische Statistik - 21 1.3.V02 - Klasse / Classe / Classe",
        "description" : "BFS defines variables for medical statistic (german, french, italian) see [BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Im Rahmen des Spitalaufenthaltes belegte Liegeklasse, nicht BFS die Versicherungskategorie. Bei Wechsel der Klasse ist die im Wesentlichen beanspruchte Klasse anzugeben.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/bfs-medstats-25-mainguarantor"
        },
        "name" : "BFS Medizinische Statistik - 25 1.4.V02 - Hauptkostenträger für Grundversicherungsleistungen / Prise en charge des soins de base / Unità d’imputazione principale per le prestazioni dell’assicurazione di base",
        "description" : "BFS defines variables for medical statistic (german, french, italian) see [BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Angabe des Hauptgaranten, der für die Kosten der Grundversicherungsleistungen des Spitalaufenthalts im Wesentlichen aufkommt. Keine Mehrfachnennungen möglich.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/bfs-medstats-27-dischargedecision"
        },
        "name" : "BFS Medizinische Statistik - 27 1.5.V02 - Entscheid für Austritt / Décision de sortie / Décisione dell’uscita",
        "description" : "BFS defines variables for medical statistic (german, french, italian) see [BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Wer hat den Klinikaustritt veranlasst?",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/bfs-medstats-27-dischargedecision"
        },
        "name" : "BFS Medizinische Statistik - 27 1.5.V02 - Entscheid für Austritt / Décision de sortie / Décisione dell’uscita",
        "description" : "BFS defines variables for medical statistic (german, french, italian) see [BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Wer hat den Klinikaustritt veranlasst?",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/bfs-medstats-28-dischargedestination"
        },
        "name" : "BFS Medizinische Statistik - 28 1.5.V03 - Aufenthalt nach Austritt / Séjour après la sortie / Destinazione dopo l’uscita",
        "description" : "BFS defines variables for medical statistic (german, french, italian) see [BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Wohin wurde der Patient entlassen?",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/bfs-medstats-28-dischargedestination"
        },
        "name" : "BFS Medizinische Statistik - 28 1.5.V03 - Aufenthalt nach Austritt / Séjour après la sortie / Destinazione dopo l’uscita",
        "description" : "BFS defines variables for medical statistic (german, french, italian) see [BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Wohin wurde der Patient entlassen?",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/bfs-medstats-29-dischargeencounter"
        },
        "name" : "BFS Medizinische Statistik - 29 1.5.V04 - Behandlung nach Austritt / Prise en charge après la sortie / Trattamento dopo l’uscita",
        "description" : "BFS defines variables for medical statistic (german, french, italian) see [BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Behandlung, Pflege, Rehabilitation nach dem Spitalaufenthalt. Es geht darum, den Behandlungserfolg resp. den Abhängigkeitsgrad bei Austritt anzugeben. Nur die am besten zutreffende Kategorie auswählen.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/bfs-medstats-29-dischargeencounter"
        },
        "name" : "BFS Medizinische Statistik - 29 1.5.V04 - Behandlung nach Austritt / Prise en charge après la sortie / Trattamento dopo l’uscita",
        "description" : "BFS defines variables for medical statistic (german, french, italian) see [BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Behandlung, Pflege, Rehabilitation nach dem Spitalaufenthalt. Es geht darum, den Behandlungserfolg resp. den Abhängigkeitsgrad bei Austritt anzugeben. Nur die am besten zutreffende Kategorie auswählen.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/bfs-country-codes"
        },
        "name" : "BFS Verzeichnis der Staaten und Gebiete",
        "description" : "BFS defines the valid country codes in Switzerland",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/CHAllergyIntoleranceValueSet"
        },
        "name" : "CH AllergyIntolerance",
        "description" : "CH AllergyIntolerance coding value set. This value set includes codes values  from SNOMED Clinical Terms® for no known [xy] allergies AND findings AND substances for the documentation of allergy or intolerance",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/allergyintolerance-category-supplement"
        },
        "name" : "CH AllergyIntolerance Category",
        "description" : "Code supplement with translations of CHAllergyIntolerance category",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/allergyintolerance-clinical-supplement"
        },
        "name" : "CH AllergyIntolerance Clinical Status",
        "description" : "Code supplement with translations of CHAllergyIntolerance clinical status",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/CHAllergyIntoleranceConditionValueSet"
        },
        "name" : "CH AllergyIntolerance Condition",
        "description" : "CH AllergyIntolerance condition value set. This value set includes codes from SNOMED Clinical Terms®  values  for values from the manifestation of reactions value set PLUS findings for the documentation of allergy or intolerances in conditions as problem-list or as encounter-diagnosis as well as its absence (no know allergies)",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/allergyintolerance-criticality-supplement"
        },
        "name" : "CH AllergyIntolerance Criticality Status",
        "description" : "Code supplement with translations of CHAllergyIntolerance criticality status",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/CHAllergyIntoleranceReactionManifestationValueSet"
        },
        "name" : "CH AllergyIntolerance Reaction Manifestation",
        "description" : "CH AllergyIntolerance reaction manifestation value set, including codes values according to the Allergy Reaction (GPS) - IPS value set from SNOMED Clinical Terms®  for the documentation of manifestation of allergy or intolerance reactions",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/CHAllergyIntoleranceReactionSubstanceValueSet"
        },
        "name" : "CH AllergyIntolerance Reaction Substance",
        "description" : "CH AllergyIntolerance reation substance value set. This value set includes codes from SNOMED Clinical Terms® substances for the documentation of substancies of allergy or intolerance reactions",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/allergyintolerance-severity-supplement"
        },
        "name" : "CH AllergyIntolerance Severity Status",
        "description" : "Code supplement with translations of CHAllergyIntolerance severity status",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/allergyintolerance-type-supplement"
        },
        "name" : "CH AllergyIntolerance Type",
        "description" : "Code supplement with translations of CHAllergyIntolerance type",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/allergyintolerance-verification-supplement"
        },
        "name" : "CH AllergyIntolerance Verification Status",
        "description" : "Code supplement with translations of CHAllergyIntolerance verification status",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-vacd-vaccines-vs"
        },
        "name" : "CH VACD All Swiss Vaccine Codes",
        "description" : "The list of vaccines available (Swissmedic authorized) or earlier available in Switzerland.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-vacd-oldswiss-vaccines-vs"
        },
        "name" : "CH VACD Old Swiss Vaccine Codes",
        "description" : "Old vaccines codes earlier available in Switzerland.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ch-vacd-myvaccines-cs"
        },
        "name" : "CH VACD Old Swiss Vaccines",
        "description" : "Old vaccines codes earlier available in Switzerland.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-vacd-recommendation-categories-vs"
        },
        "name" : "CH VACD Recommendation Categories for Immunizations",
        "description" : "Immunization recommendation categories.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-vacd-route-of-administration-vs"
        },
        "name" : "CH VACD Route of Administration for Immunization",
        "description" : "The route of immunization administration codes. This list is only a sublist of the List used for eMedication.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-vacd-vaccines-snomedct-vs"
        },
        "name" : "CH VACD Snomed CT for VaccineCode",
        "description" : "The list of vaccine products in Snomed CT list.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ch-vacd-recommendation-categories-cs"
        },
        "name" : "CH VACD Swiss Immunization Recommendation Categories",
        "description" : "Immunization recommendation categories available in Switzerland.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-vacd-recommendation-forecast-status-vs"
        },
        "name" : "CH VACD Swiss Recommendation Forecast Status",
        "description" : "Immunization recommendation forecast status values.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ch-vacd-recommendation-forecast-status-cs"
        },
        "name" : "CH VACD Swiss Recommendation Forecast Status",
        "description" : "Immunization recommendation forecast status values.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-vacd-ch-vaccination-plan-immunizations-vs"
        },
        "name" : "CH VACD Swiss Vaccination Plan Immunizations",
        "description" : "Immunization procedures for recommendations according to the vaccination plan.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-vacd-swissmedic-immunoglobulin-vs"
        },
        "name" : "CH VACD Swissmedic Authorized Immunoglobulin Codes",
        "description" : "The list of ATC J06B – Immunoglobulin codes Swissmedic has given an autorization number.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ch-vacd-swissmedic-immunoglobulin-cs"
        },
        "name" : "CH VACD Swissmedic Authorized Immunoglobulin Codes",
        "description" : "The ATC J06B – Immunoglobulin codes Swissmedic has given an autorization.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-vacd-swissmedic-immunesera-vs"
        },
        "name" : "CH VACD Swissmedic Authorized Immunsera Codes",
        "description" : "The list of ATC J06B – Immune sera codes Swissmedic has given an authorization number.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ch-vacd-swissmedic-immunesera-cs"
        },
        "name" : "CH VACD Swissmedic Authorized Immunsera Codes",
        "description" : "The ATC J06A – Immunsera codes Swissmedic has given an autorization.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-vacd-swissmedic-vaccines-vs"
        },
        "name" : "CH VACD Swissmedic Authorized Vaccine Codes",
        "description" : "The list of vaccines available in Switzerland (Swissmedic authorized).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ch-vacd-swissmedic-cs"
        },
        "name" : "CH VACD Swissmedic Authorized Vaccines",
        "description" : "The vaccines Swissmedic has given an autorization number.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-vacd-targetdiseasesandillnessesundergoneforimmunization-vs"
        },
        "name" : "CH VACD Target disease and illnesses undergone for immunization",
        "description" : "This valueset contains all entries defining target deseases or illnesses undergone for immunization reasons.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/2.16.756.5.30.1.127.3.10.14"
        },
        "name" : "ch-ehealth-codesystem-agentRole",
        "description" : "Role codes as per Annex 5 EPRO-FDHA, CH:ATC, version July 2019",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/2.16.756.5.30.1.127.3.10.7"
        },
        "name" : "ch-ehealth-codesystem-atc",
        "description" : "Audit Trail Consumption Event Types for CH:ATC",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/2.16.756.5.30.1.127.3.10.18"
        },
        "name" : "ch-ehealth-codesystem-eprdeletionstatus",
        "description" : "Deletion codes as per supplement 1 to Annex 5 EPRO-FDHA.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/2.16.756.5.30.1.127.3.10.10"
        },
        "name" : "ch-ehealth-codesystem-format",
        "description" : "Document format as per Annex; EPRO-FDHA.       \t\tThis unambiguous code defines the format of the XDS document. Together with the mimetype, this should provide the potential consumer with sufficient information as to whether they are in a position to process the document.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/2.16.756.5.30.1.127.3.10.9"
        },
        "name" : "ch-ehealth-codesystem-hpd",
        "description" : "HCProfessional.hcProfession",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/2.16.756.5.30.1.127.3.10.12"
        },
        "name" : "ch-ehealth-codesystem-language",
        "description" : "Document language as per Annex 3 EPRO-FDHA. Defines the language in which the document was written.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/2.16.756.5.30.1.127.3.5"
        },
        "name" : "ch-ehealth-codesystem-medreg",
        "description" : "HCProfessional.hcSpecialisation",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/2.16.756.5.30.1.127.3.6"
        },
        "name" : "ch-ehealth-codesystem-nareg",
        "description" : "Speciality of the author as per Annex 3.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/2.16.756.5.30.1.127.3.10.5"
        },
        "name" : "ch-ehealth-codesystem-purposeOfUse",
        "description" : "Purpose Of Use as per Annex 5 EPRO-FDHA, Extension 1.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/2.16.756.5.30.1.127.3.10.6"
        },
        "name" : "ch-ehealth-codesystem-role",
        "description" : "Role codes as per Annex 5 EPRO-FDHA, version July 2019",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-core-encounter-participation-type"
        },
        "name" : "ChCoreEncounterParticipationType",
        "description" : "This value set defines a set of codes that can be used to indicate how an individual participates in an encounter. In Switzerland the primary care physician is added to the extensible base ValueSet.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-core-maritalstatus"
        },
        "name" : "ChCoreMaritalStatus",
        "description" : "MaritalStatus combined by fhir and eCH-11. See [maritalData - Zivilstandsangaben eCH-11](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.349276.html) and/or [BFS Amtlicher Katalog der Merkmale](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.349276.html).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-core-religion"
        },
        "name" : "ChCoreReligion",
        "description" : "Religion combined by fhir and eCH-11",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ch-etoc-conditioncategory"
        },
        "name" : "Condition Category",
        "description" : "Additional codes for condition category.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/condition-category"
        },
        "name" : "Condition Category Codes",
        "description" : "Additional codes for condition category.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/dcmuid"
        },
        "name" : "DICOM Unique Identifiers (UIDs)",
        "description" : "A code system representing DICOM Unique Identifiers (UIDs), as per https://dicom.nema.org/medical/dicom/current/output/chtml/part06/chapter_A.html",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/DocumentEntry.authorRole"
        },
        "name" : "DocumentEntry.authorRole",
        "description" : "Role of the author.       This code defines the role of the author of the document. This is a sub-attribute of epd_xds_author.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/DocumentEntry.authorSpeciality"
        },
        "name" : "DocumentEntry.authorSpeciality",
        "description" : "Speciality of the author as per Annex 3.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/DocumentEntry.classCode"
        },
        "name" : "DocumentEntry.classCode",
        "description" : "Document class as per EPRO-FDHA Annex 3",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/DocumentEntry.confidentialityCode"
        },
        "name" : "DocumentEntry.confidentialityCode",
        "description" : "Document confidentiality as per Annex; EPRO-FDHA.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ConceptMap"
          }
        ],
        "reference" : {
          "reference" : "ConceptMap/documententry-confidentialitycode-to-fhir"
        },
        "name" : "DocumentEntry.confidentialityCode to FHIR mapping",
        "description" : "DocumentEntry.confidentialityCode to FHIR mapping",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/DocumentEntry.eventCodeList"
        },
        "name" : "DocumentEntry.eventCodeList",
        "description" : "DocumentEntry.eventCodeList",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/DocumentEntry.Ext.EprDeletionStatus"
        },
        "name" : "DocumentEntry.Ext.EprDeletionStatus",
        "description" : "Deletion codes as per supplement 1 to Annex 5 EPRO-FDHA.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/DocumentEntry.formatCode"
        },
        "name" : "DocumentEntry.formatCode",
        "description" : "Document format as per Annex; EPRO-FDHA.       \t\tThis unambiguous code defines the format of the XDS document. Together with the mimetype, this should provide the potential consumer with sufficient information as to whether they are in a position to process the document.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/DocumentEntry.healthcareFacilityTypeCode"
        },
        "name" : "DocumentEntry.healthcareFacilityTypeCode",
        "description" : "Type of healthcare facility as per Annex 3; EPRO-FDHA.       This code describes the type of healthcare facility in which the document was compiled during the treatment process. In conjunction with the authorisation control, the patient can use this information to assign all documents from a specific type of healthcare facility to a specific confidentiality level in their rights and attributes, for example.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/DocumentEntry.languageCode"
        },
        "name" : "DocumentEntry.languageCode",
        "description" : "Document language as per Annex 3 EPRO-FDHA. Defines the language in which the document was written.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/DocumentEntry.mimeType"
        },
        "name" : "DocumentEntry.mimeType",
        "description" : "MIME type of the document as per Annex; EPRO-FDHA.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/DocumentEntry.originalProviderRole"
        },
        "name" : "DocumentEntry.originalProviderRole",
        "description" : "DocumentEntry.originalProviderRole",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/DocumentEntry.practiceSettingCode"
        },
        "name" : "DocumentEntry.practiceSettingCode",
        "description" : "Medical specialisation of the data captured in the document as per Annex 3; EPRO-FDHA.       This attribute assigns the contents of a document to a medical specialisation. It is conceivable that this information will assist the patient with setting or changing the confidentiality level of documents, which is relevant for controlling access.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/DocumentEntry.sourcePatientInfo.PID-8"
        },
        "name" : "DocumentEntry.sourcePatientInfo.PID-8",
        "description" : "Patient’s gender as per Annex 3; EPRO-FDHA.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/DocumentEntry.typeCode"
        },
        "name" : "DocumentEntry.typeCode",
        "description" : "Type of document as per Annex 3 EPRO-FDHA.\r\n\n\r\nThe code defines a document’s type (e.g. discharge report, laboratory report). Each document type should be assigned to precisely one document class.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ConceptMap"
          }
        ],
        "reference" : {
          "reference" : "ConceptMap/DocumentEntryClassCodeToDocumentEntryTypeCode"
        },
        "name" : "DocumentEntryClassCodeToDocumentEntryTypeCode",
        "description" : "Mapping DocumentEntryClassCodeToDocumentEntryTypeCode",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ech-7-cantonabbreviation"
        },
        "name" : "eCH-0007 Canton Abbreviation",
        "description" : "eCH-0007: Each municipality has a unique cantonal affiliation, which can be defined by the cantonal abbreviation commonly used in Switzerland.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ech-7-cantonflabbreviation"
        },
        "name" : "eCH-0007 Canton Abbreviation incl. FL (Fürstentum Liechtenstein)",
        "description" : "eCH-0007: Analogous to cantonAbbreviation, but contains the entry 'FL' for the Principality of Liechtenstein in addition to the actual cantons.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ech-7-cantonflabbreviation"
        },
        "name" : "eCH-0007 Canton Abbreviation incl. FL (Fürstentum Liechtenstein)",
        "description" : "eCH-0007 defines cantonAbbreviation/cantonFLAbbreviation (Kantonskürzel inkl. Fürstentum Liechtenstein), see [here](https://www.ech.ch/de/ech/ech-0007/6.0).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ech-46-emailcategory"
        },
        "name" : "eCH-0046 Email Category",
        "description" : "eCH-0046 defines different types for e-mail categories. See https://www.ech.ch/de/ech/ech-0046/5.0 4.3.1 emailCategory",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ech-46-emailcategory"
        },
        "name" : "eCH-0046 Email Category",
        "description" : "eCH-0046 defines these types of e-mail categories",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ConceptMap"
          }
        ],
        "reference" : {
          "reference" : "ConceptMap/ech-46-emailcategory-to-fhir"
        },
        "name" : "eCH-0046 Email Category to FHIR Mapping",
        "description" : "ConceptMap to show the mapping from eCH-0046 e-mail category to FHIR",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ech-46-internetcategory"
        },
        "name" : "eCH-0046 Internet Category",
        "description" : "eCH-0046 defines different types for internet categories. See https://www.ech.ch/de/ech/ech-0046/5.0 4.5.1 internetCategory",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ech-46-internetcategory"
        },
        "name" : "eCH-0046 Internet Category",
        "description" : "eCH-0046 defines these types of internet categories",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ConceptMap"
          }
        ],
        "reference" : {
          "reference" : "ConceptMap/ech-46-internetcategory-to-fhir"
        },
        "name" : "eCH-0046 Internet Category to FHIR Mapping",
        "description" : "ConceptMap to show the mapping from eCH-0046 internet category to FHIR",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ech-46-phonecategory"
        },
        "name" : "eCH-0046 Phone Category",
        "description" : "eCH-0046 defines different types for phone categories. See https://www.ech.ch/de/ech/ech-0046/5.0 4.4.1 phoneNumberCategory",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ech-46-phonecategory"
        },
        "name" : "eCH-0046 Phone Category",
        "description" : "eCH-0046 defines these types of phone categories",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ConceptMap"
          }
        ],
        "reference" : {
          "reference" : "ConceptMap/ech-46-phonecategory-to-fhir"
        },
        "name" : "eCH-0046 Phone Category to FHIR Mapping",
        "description" : "ConceptMap to show the mapping from eCH-0046 phone category to FHIR",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ech-10-linetype"
        },
        "name" : "eCH-010 Address Line Type",
        "description" : "eCH-010 defines different address lines (addressLine1,2 and street)",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ech-10"
        },
        "name" : "eCH-010 Types",
        "description" : "eCH-010 defines different Types for a postal address",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ech-11-firstnamedatatype"
        },
        "name" : "eCH-011 FirstNameDataTypes",
        "description" : "eCH-011 defines different nameData Types, this ValueSet is the subset for the firstnames",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ech-11-maritaldata-separation"
        },
        "name" : "eCH-011 MaritalData Separation",
        "description" : "eCH-011 defines different maritalData separation zypes. See [maritalData - Zivilstandsangaben eCH-11](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.349276.html) and/or [BFS Amtlicher Katalog der Merkmale](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.349276.html).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ech-11-maritaldata-separation"
        },
        "name" : "eCH-011 MaritalData Separation",
        "description" : "eCH-011 defines maritalData separation types",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ech-11-maritalstatus"
        },
        "name" : "eCH-011 MaritalStatus",
        "description" : "eCH-011 defines different maritalStatus Types. See [maritalData - Zivilstandsangaben eCH-11](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.349276.html) and/or [BFS Amtlicher Katalog der Merkmale](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.349276.html).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ech-11-maritalstatus"
        },
        "name" : "eCH-011 MaritalStatus",
        "description" : "eCH-011 defines maritalStaus Types",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ech-11-namedatatype"
        },
        "name" : "eCH-011 NameDataTypes",
        "description" : "eCH-011 defines different nameData Types, this ValueSet is the subset for the family name",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ech-11-religion"
        },
        "name" : "eCH-011 Religion",
        "description" : "eCH-011 defines different religionTypes. See https://ech.ch/de/ech/ech-0011/ (section 'religion – Konfessionszugehörigkeit')",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ech-11-sex"
        },
        "name" : "eCH-011 Sex",
        "description" : "eCH-011 defines different sex Types. See https://www.ech.ch/vechweb/page?p=dossier&documentNumber=eCH-0011&documentVersion=8.13.3.5  3.3.3.3 sex",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ech-11-sex"
        },
        "name" : "eCH-011 Sex",
        "description" : "eCH-011 defines these sex types",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ech-11"
        },
        "name" : "eCH-011 Types",
        "description" : "eCH-011 defines different Types like Names, contactAdress etc. They are further described from the [BFS](https://www.bfs.admin.ch/bfs/de/home/register/personenregister/registerharmonisierung/nomenklaturen.assetdetail.349276.html) in 'Amtlicher Katalog der Merkmale' (Official catalogue of characteristics), Copyright BFS, Neuchâtel 2014, ISBN 978-3-303-00504-0",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/edqm-administrationmethod"
        },
        "name" : "EDQM - Administration Method",
        "description" : "ValueSet Administration method from EDQM, AME, see https://standardterms.edqm.eu/#",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/edqm-pharmaceuticaldoseform"
        },
        "name" : "EDQM - Pharmaceutical Dose Form",
        "description" : "Valueset Pharmaceutical Dose Form from EDQM, PDF, export20.5.2021, see https://standardterms.edqm.eu/#",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/edqm-routeofadministration"
        },
        "name" : "EDQM - RouteOfAdministration",
        "description" : "Valueset RouteOfAdministration from EDQM, ROA, export 1.6.2021, see https://standardterms.edqm.eu/#",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/edqm-standardterms"
        },
        "name" : "EDQM - Standard Terms",
        "description" : "EDQM - Standard Terms used in Switzerland (aggregations of codes of ValueSets Route of Administration, Dose Form and Administration Method, see original codes system defined in https://standardterms.edqm.eu/#)",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/EprAgentRole"
        },
        "name" : "EprAgentRole",
        "description" : "Role codes as per Annex 5 EPRO-FDHA, CH:ATC, version July 2019",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/EprAuditTrailConsumptionEventType"
        },
        "name" : "EprAuditTrailConsumptionEventType",
        "description" : "Audit Trail Consumption Event Types for CH:ATC",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/EprPurposeOfUse"
        },
        "name" : "EprPurposeOfUse",
        "description" : "Purpose Of Use as per Annex 5 EPRO-FDHA, Extension 1.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/EprRole"
        },
        "name" : "EprRole",
        "description" : "Role codes as per Annex 5 EPRO-FDHA, version July 2019",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "NamingSystem"
          }
        ],
        "reference" : {
          "reference" : "NamingSystem/epr-spid"
        },
        "name" : "EPR_SPID",
        "description" : "EPR-SPID: The Central Compensation Office (ZAS; CCO) assigns and manages the new patient identification number according to the EPRA (EPR-SPID), which is only linked internally in the CCO with the AHV number. It maintains the UPI identification database (Unique Personal Identifier Database), which the EPR communities may access. The law regulates how the the EPR-SPID can be used. SR 816.111 states (Art. 10 para. 3 EPDV) that communities must ensure that the EPR-SPID number cannot be not stored in document repositories or document registries.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/event-timing"
        },
        "name" : "EventTiming",
        "description" : "Translations of concepts for event-timing",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "NamingSystem"
          }
        ],
        "reference" : {
          "reference" : "NamingSystem/forum-datenaustausch-tariff"
        },
        "name" : "forum-datenaustausch-tariff",
        "description" : "Identification for Forum Datenaustausch tariff types. \n\nThe detailed tariff list is avaible at this [url](https://www.forum-datenaustausch.ch/de/referenzdaten/)\n\nNaming Convention for fore each tariff type is:\n\nhttp://forum-datenaustausch.ch/tariff/[A-Z0-9]{3}",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "NamingSystem"
          }
        ],
        "reference" : {
          "reference" : "NamingSystem/gln"
        },
        "name" : "GLN",
        "description" : "Each healthcare partner (natural or legal person) is referenced with a unique code of type GLN (former name: EAN code) of the [GS1](https://www.gs1.ch/de/home) system, see [refdata](https://www.refdata.ch/).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "NamingSystem"
          }
        ],
        "reference" : {
          "reference" : "NamingSystem/gtin"
        },
        "name" : "gtin",
        "description" : "Global Trade Item Number from [GS1](https://www.gs1.ch/de/home).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/HCProfessional.hcProfession"
        },
        "name" : "HCProfessional.hcProfession",
        "description" : "HCProfessional.hcProfession",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/HCProfessional.hcSpecialisation"
        },
        "name" : "HCProfessional.hcSpecialisation",
        "description" : "HCProfessional.hcSpecialisation",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ConceptMap"
          }
        ],
        "reference" : {
          "reference" : "ConceptMap/HCProfessionalHCProfessionSpecialisationMap"
        },
        "name" : "HCProfessionalHCProfessionSpecialisationMap",
        "description" : "Mapping HCProfessionalHCProfessionSpecialisationMap",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ihe-pharmaceuticaladvicestatuslist"
        },
        "name" : "IHE Pharmaceutical Advice Status List",
        "description" : "IHE Pharmaceutical Advice Status List",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ihe-pharmaceuticaladvicestatuslist"
        },
        "name" : "IHE Pharmaceutical Advice Status List",
        "description" : "IHE Pharmaceutical Advice Status List",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ConceptMap"
          }
        ],
        "reference" : {
          "reference" : "ConceptMap/ch-vacd-immunoglobulin-targetdiseases-cm"
        },
        "name" : "ImmunGlobuline To TargetDisease Mapping",
        "description" : "Mappings from ImmunGlobuline to TargetDisease according to the correcsponding valuesets",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/mainguarantor"
        },
        "name" : "Main Guarantor",
        "description" : "Codes for the different types of a main guarantor.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/mainguarantor"
        },
        "name" : "Main guarantor",
        "description" : "BFS defines variables for the main guarantor, see [CodeSystem BfsMedstats25Mainguarantor](CodeSystem-bfs-medstats-25-mainguarantor.html). In the Swiss healthcare system, an additional value is used that is not covered by the BFS variables, so the code for supplementary insurance is defined here.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ConceptMap"
          }
        ],
        "reference" : {
          "reference" : "ConceptMap/maritalstatus-ech11-to-fhir"
        },
        "name" : "MaritalStatus eCH-011 to FHIR mapping",
        "description" : "MaritalStatus mapping from eCH-011 to FHIR. See [maritalData - Zivilstandsangaben eCH-11](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.349276.html) and/or [BFS Amtlicher Katalog der Merkmale](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.349276.html).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/servicerequest-category"
        },
        "name" : "ServiceRequest Category",
        "description" : "Codes for the category of service request used to define the requested service.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/servicerequest-category"
        },
        "name" : "ServiceRequest Category",
        "description" : "Codes for the category of service request used to define the requested service.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ConceptMap"
          }
        ],
        "reference" : {
          "reference" : "ConceptMap/sex-ech11-to-fhir"
        },
        "name" : "Sex eCH-011 to FHIR mapping",
        "description" : "Sex eCH-011 to FHIR mapping",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/snomedct-concept-viraldiseases-vs"
        },
        "name" : "Snomed CT Concept Viral Diseases",
        "description" : "The list of viral diseases by Snomed CT codes.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ConceptMap"
          }
        ],
        "reference" : {
          "reference" : "ConceptMap/ch-vacd-vaccines-sct-sm-cm"
        },
        "name" : "Snomed CT VaccineCode To SwissMedic VaccineCode",
        "description" : "In this ConceptMap the mappings from the codes out of the ValueSet [CH VACD Snomed CT for VaccineCode](ValueSet-ch-vacd-vaccines-snomedct-vs.html) to the codes out of the ValueSet [CH VACD Swissmedic code for VaccineCode](ValueSet-ch-vacd-vaccines-vs.html) are defined.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ConceptMap"
          }
        ],
        "reference" : {
          "reference" : "ConceptMap/ch-vacd-vaccines-sct-targetdiseases-cm"
        },
        "name" : "Snomed CT VaccineCode To TargetDisease Mapping",
        "description" : "Mappings from SnomedCT VaccineCode to TargetDisease according to the correcsponding valuesets",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/SubmissionSet.Author.AuthorRole"
        },
        "name" : "SubmissionSet.Author.AuthorRole",
        "description" : "SubmissionSet.author.authorRole",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/SubmissionSet.contentTypeCode"
        },
        "name" : "SubmissionSet.contentTypeCode",
        "description" : "SubmissionSet.contentTypeCode",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ConceptMap"
          }
        ],
        "reference" : {
          "reference" : "ConceptMap/ch-vacd-vaccines-sm-sct-cm"
        },
        "name" : "SwissMedic VaccineCode To Snomed CT VaccineCode",
        "description" : "In this ConceptMap the mappings from the codes out of the ValueSet [CH VACD Swissmedic code for VaccineCode](ValueSet-ch-vacd-vaccines-vs.html) to the codes out of the ValueSet [CH VACD Snomed CT for VaccineCode](ValueSet-ch-vacd-vaccines-snomedct-vs.html) are defined.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ConceptMap"
          }
        ],
        "reference" : {
          "reference" : "ConceptMap/ch-vacd-targetdiseases-vaccines-cm"
        },
        "name" : "TargetDisease To VaccineCode Mapping",
        "description" : "Mappings from TargetDisease to VaccineCode according to the correcsponding valuesets",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/v3-TimingEvent"
        },
        "name" : "TimingEvent",
        "description" : "Translations of concepts for v3-TimingEvent",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/treatmentreason"
        },
        "name" : "Treatment Reason",
        "description" : "Value set including the values for the treatment reason.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "NamingSystem"
          }
        ],
        "reference" : {
          "reference" : "NamingSystem/uidb"
        },
        "name" : "UIDB",
        "description" : "Unique IDentification Business (UIDB) number (in French, numéro d'IDentification suisse des Enterprises (IDE)) (in German, Schweizer Unternehmens-IDentifikationsnummer (UID)) (in Italian, numero d'IDentificazione svizzero delle Imprese (IDI))\n  Organizations Covered By System: All Companies/organizations registered in the public Swiss Registers such as the Swiss Register of Commerce, the Value Added Tax (VAT) register, the Social security agencies Registers, Cantons registers, etc., and publish in the UID Register.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/UnitCode"
        },
        "name" : "UnitCode",
        "description" : "UnitCode",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ConceptMap"
          }
        ],
        "reference" : {
          "reference" : "ConceptMap/ch-vacd-vaccines-targetdiseases-cm"
        },
        "name" : "VaccineCode To TargetDisease Mapping",
        "description" : "Mappings from VaccineCode to TargetDisease according to the correcsponding valuesets",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "NamingSystem"
          }
        ],
        "reference" : {
          "reference" : "NamingSystem/veka"
        },
        "name" : "veka",
        "description" : "Insurance card number (called VEKA-Nr. (Versichertenkarten-Nummer) in German) from [SASIS](https://www.sasis.ch/veka/).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "NamingSystem"
          }
        ],
        "reference" : {
          "reference" : "NamingSystem/zsr"
        },
        "name" : "ZSR",
        "description" : "The ZSR number is issued to self-employed, natural or legal persons (organisations) who can and want to work at the expense of health insurance. \n                      See [Sasis](https://www.sasis.ch/de/779).\n                      German: ZSR (Zahlstellenregister),\n                      French: RCC (Registre des codes-créanciers),\n                      Italian: RCC (Registro dei codici creditori).",
        "exampleBoolean" : false
      }
    ],
    "page" : {
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
          "valueUrl" : "toc.html"
        }
      ],
      "nameUrl" : "toc.html",
      "title" : "Table of Contents",
      "generation" : "html",
      "page" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "index.html"
            }
          ],
          "nameUrl" : "index.html",
          "title" : "Home",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "guidance.html"
            }
          ],
          "nameUrl" : "guidance.html",
          "title" : "Guidance",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "codesystems.html"
            }
          ],
          "nameUrl" : "codesystems.html",
          "title" : "Code Systems",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "valuesets.html"
            }
          ],
          "nameUrl" : "valuesets.html",
          "title" : "Value Sets",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "conceptmaps.html"
            }
          ],
          "nameUrl" : "conceptmaps.html",
          "title" : "Concept Maps",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "namingsystems.html"
            }
          ],
          "nameUrl" : "namingsystems.html",
          "title" : "Naming Systems",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "changelog.html"
            }
          ],
          "nameUrl" : "changelog.html",
          "title" : "Changelog",
          "generation" : "markdown"
        }
      ]
    },
    "parameter" : [
      {
        "code" : "path-resource",
        "value" : "input/resources/codesystem"
      },
      {
        "code" : "path-resource",
        "value" : "input/resources/conceptmap"
      },
      {
        "code" : "path-resource",
        "value" : "input/resources/namingsystem"
      },
      {
        "code" : "path-resource",
        "value" : "input/resources/valueset"
      },
      {
        "code" : "path-resource",
        "value" : "fsh-generated/resources"
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
        "value" : "input/resources"
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
      }
    ]
  }
}

```
