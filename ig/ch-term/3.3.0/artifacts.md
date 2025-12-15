# Artifacts Summary - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* **Artifacts Summary**

## Artifacts Summary

This page provides a list of the FHIR artifacts defined as part of this implementation guide.

### Terminology: Value Sets 

These define sets of codes used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [ActSubstanceAdminSubstitutionCode](ValueSet-ActSubstanceAdminSubstitutionCode.md) | ActSubstanceAdminSubstitutionCode |
| [ActivePharmaceuticalIngredient](ValueSet-ActivePharmaceuticalIngredient.md) | ActivePharmaceuticalIngredient |
| [BFS Medizinische Statistik - 17 1.2.V02 - Aufenthaltsort vor dem Eintritt / Séjour avant l’admission / Luogo di soggiorno prima dell’ammissione](ValueSet-bfs-medstats-17-admitsource.md) | BFS defines variables for medical statistic (german, french, italian) see[BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Unmittelbarer Aufenthaltsort vor dem Eintritt. Wo befand sich BFS der Patient / die Patientin? |
| [BFS Medizinische Statistik - 18 1.2.V03 - Eintrittsart / Mode d’admission / Genere di ricovero](ValueSet-bfs-medstats-18-admittype.md) | BFS defines variables for medical statistic (german, french, italian) see[BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Beschreibung der Umstände des Eintritts. Wie wurde der BFS Patient / die Patientin aufgenommen? |
| [BFS Medizinische Statistik - 19 1.2.V04 - Einweisende Instanz / Décision d’envoi / Istanza ricoverante](ValueSet-bfs-medstats-19-admitrole.md) | BFS defines variables for medical statistic (german, french, italian) see[BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Unmittelbarer Aufenthaltsort vor dem Eintritt. Wo befand sich BFS der Patient / die Patientin? |
| [BFS Medizinische Statistik - 20 1.3.V01 - Behandlungsart / Type de prise en charge / Genere di trattamento](ValueSet-bfs-medstats-20-encounterclass.md) | BFS defines variables for medical statistic (german, french, italian) see[BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Angabe der Behandlungsart |
| [BFS Medizinische Statistik - 21 1.3.V02 - Klasse / Classe / Classe](ValueSet-bfs-medstats-21-encountertype.md) | BFS defines variables for medical statistic (german, french, italian) see[BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Im Rahmen des Spitalaufenthaltes belegte Liegeklasse, nicht BFS die Versicherungskategorie. Bei Wechsel der Klasse ist die im Wesentlichen beanspruchte Klasse anzugeben. |
| [BFS Medizinische Statistik - 27 1.5.V02 - Entscheid für Austritt / Décision de sortie / Décisione dell’uscita](ValueSet-bfs-medstats-27-dischargedecision.md) | BFS defines variables for medical statistic (german, french, italian) see[BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Wer hat den Klinikaustritt veranlasst? |
| [BFS Medizinische Statistik - 28 1.5.V03 - Aufenthalt nach Austritt / Séjour après la sortie / Destinazione dopo l’uscita](ValueSet-bfs-medstats-28-dischargedestination.md) | BFS defines variables for medical statistic (german, french, italian) see[BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Wohin wurde der Patient entlassen? |
| [BFS Medizinische Statistik - 29 1.5.V04 - Behandlung nach Austritt / Prise en charge après la sortie / Trattamento dopo l’uscita](ValueSet-bfs-medstats-29-dischargeencounter.md) | BFS defines variables for medical statistic (german, french, italian) see[BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Behandlung, Pflege, Rehabilitation nach dem Spitalaufenthalt. Es geht darum, den Behandlungserfolg resp. den Abhängigkeitsgrad bei Austritt anzugeben. Nur die am besten zutreffende Kategorie auswählen. |
| [BFS Verzeichnis der Staaten und Gebiete](ValueSet-bfs-country-codes.md) | BFS defines the valid country codes in Switzerland |
| [CH AllergyIntolerance](ValueSet-CHAllergyIntoleranceValueSet.md) | CH AllergyIntolerance coding value set. This value set includes codes values from SNOMED Clinical Terms® for no known [xy] allergies AND findings AND substances for the documentation of allergy or intolerance |
| [CH AllergyIntolerance Condition](ValueSet-CHAllergyIntoleranceConditionValueSet.md) | CH AllergyIntolerance condition value set. This value set includes codes from SNOMED Clinical Terms® values for values from the manifestation of reactions value set PLUS findings for the documentation of allergy or intolerances in conditions as problem-list or as encounter-diagnosis as well as its absence (no know allergies) |
| [CH AllergyIntolerance Reaction Manifestation](ValueSet-CHAllergyIntoleranceReactionManifestationValueSet.md) | CH AllergyIntolerance reaction manifestation value set, including codes values according to the Allergy Reaction (GPS) - IPS value set from SNOMED Clinical Terms® for the documentation of manifestation of allergy or intolerance reactions |
| [CH AllergyIntolerance Reaction Substance](ValueSet-CHAllergyIntoleranceReactionSubstanceValueSet.md) | CH AllergyIntolerance reation substance value set. This value set includes codes from SNOMED Clinical Terms® substances for the documentation of substancies of allergy or intolerance reactions |
| [CH VACD All Swiss Vaccine Codes](ValueSet-ch-vacd-vaccines-vs.md) | The list of vaccines available (Swissmedic authorized) or earlier available in Switzerland. |
| [CH VACD Old Swiss Vaccine Codes](ValueSet-ch-vacd-oldswiss-vaccines-vs.md) | Old vaccines codes earlier available in Switzerland. |
| [CH VACD Recommendation Categories for Immunizations](ValueSet-ch-vacd-recommendation-categories-vs.md) | Immunization recommendation categories. |
| [CH VACD Route of Administration for Immunization](ValueSet-ch-vacd-route-of-administration-vs.md) | The route of immunization administration codes. This list is only a sublist of the List used for eMedication. |
| [CH VACD Snomed CT for VaccineCode](ValueSet-ch-vacd-vaccines-snomedct-vs.md) | The list of vaccine products in Snomed CT list. |
| [CH VACD Swiss Recommendation Forecast Status](ValueSet-ch-vacd-recommendation-forecast-status-vs.md) | Immunization recommendation forecast status values. |
| [CH VACD Swiss Vaccination Plan Immunizations](ValueSet-ch-vacd-ch-vaccination-plan-immunizations-vs.md) | Immunization procedures for recommendations according to the vaccination plan. |
| [CH VACD Swissmedic Authorized Immunoglobulin Codes](ValueSet-ch-vacd-swissmedic-immunoglobulin-vs.md) | The list of ATC J06B – Immunoglobulin codes Swissmedic has given an autorization number. |
| [CH VACD Swissmedic Authorized Immunsera Codes](ValueSet-ch-vacd-swissmedic-immunesera-vs.md) | The list of ATC J06B – Immune sera codes Swissmedic has given an authorization number. |
| [CH VACD Swissmedic Authorized Vaccine Codes](ValueSet-ch-vacd-swissmedic-vaccines-vs.md) | The list of vaccines available in Switzerland (Swissmedic authorized). |
| [CH VACD Target disease and illnesses undergone for immunization](ValueSet-ch-vacd-targetdiseasesandillnessesundergoneforimmunization-vs.md) | This valueset contains all entries defining target deseases or illnesses undergone for immunization reasons. |
| [ChCoreEncounterParticipationType](ValueSet-ch-core-encounter-participation-type.md) | This value set defines a set of codes that can be used to indicate how an individual participates in an encounter. In Switzerland the primary care physician is added to the extensible base ValueSet. |
| [ChCoreMaritalStatus](ValueSet-ch-core-maritalstatus.md) | MaritalStatus combined by fhir and eCH-11. See[maritalData - Zivilstandsangaben eCH-11](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.349276.html)and/or[BFS Amtlicher Katalog der Merkmale](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.349276.html). |
| [ChCoreReligion](ValueSet-ch-core-religion.md) | Religion combined by fhir and eCH-11 |
| [Condition Category Codes](ValueSet-condition-category.md) | Additional codes for condition category. |
| [DocumentEntry.Ext.EprDeletionStatus](ValueSet-DocumentEntry.Ext.EprDeletionStatus.md) | Deletion codes as per supplement 1 to Annex 5 EPRO-FDHA. |
| [DocumentEntry.authorRole](ValueSet-DocumentEntry.authorRole.md) | Role of the author. This code defines the role of the author of the document. This is a sub-attribute of epd_xds_author. |
| [DocumentEntry.authorSpeciality](ValueSet-DocumentEntry.authorSpeciality.md) | Speciality of the author as per Annex 3. |
| [DocumentEntry.classCode](ValueSet-DocumentEntry.classCode.md) | Document class as per EPRO-FDHA Annex 3 |
| [DocumentEntry.confidentialityCode](ValueSet-DocumentEntry.confidentialityCode.md) | Document confidentiality as per Annex; EPRO-FDHA. |
| [DocumentEntry.eventCodeList](ValueSet-DocumentEntry.eventCodeList.md) | DocumentEntry.eventCodeList |
| [DocumentEntry.formatCode](ValueSet-DocumentEntry.formatCode.md) | Document format as per Annex; EPRO-FDHA. This unambiguous code defines the format of the XDS document. Together with the mimetype, this should provide the potential consumer with sufficient information as to whether they are in a position to process the document. |
| [DocumentEntry.healthcareFacilityTypeCode](ValueSet-DocumentEntry.healthcareFacilityTypeCode.md) | Type of healthcare facility as per Annex 3; EPRO-FDHA. This code describes the type of healthcare facility in which the document was compiled during the treatment process. In conjunction with the authorisation control, the patient can use this information to assign all documents from a specific type of healthcare facility to a specific confidentiality level in their rights and attributes, for example. |
| [DocumentEntry.languageCode](ValueSet-DocumentEntry.languageCode.md) | Document language as per Annex 3 EPRO-FDHA. Defines the language in which the document was written. |
| [DocumentEntry.mimeType](ValueSet-DocumentEntry.mimeType.md) | MIME type of the document as per Annex; EPRO-FDHA. |
| [DocumentEntry.originalProviderRole](ValueSet-DocumentEntry.originalProviderRole.md) | DocumentEntry.originalProviderRole |
| [DocumentEntry.practiceSettingCode](ValueSet-DocumentEntry.practiceSettingCode.md) | Medical specialisation of the data captured in the document as per Annex 3; EPRO-FDHA. This attribute assigns the contents of a document to a medical specialisation. It is conceivable that this information will assist the patient with setting or changing the confidentiality level of documents, which is relevant for controlling access. |
| [DocumentEntry.sourcePatientInfo.PID-8](ValueSet-DocumentEntry.sourcePatientInfo.PID-8.md) | Patient’s gender as per Annex 3; EPRO-FDHA. |
| [DocumentEntry.typeCode](ValueSet-DocumentEntry.typeCode.md) | Type of document as per Annex 3 EPRO-FDHA.The code defines a document’s type (e.g. discharge report, laboratory report). Each document type should be assigned to precisely one document class. |
| [EDQM - Administration Method](ValueSet-edqm-administrationmethod.md) | ValueSet Administration method from EDQM, AME, see https://standardterms.edqm.eu/# |
| [EDQM - Pharmaceutical Dose Form](ValueSet-edqm-pharmaceuticaldoseform.md) | Valueset Pharmaceutical Dose Form from EDQM, PDF, export20.5.2021, see https://standardterms.edqm.eu/# |
| [EDQM - RouteOfAdministration](ValueSet-edqm-routeofadministration.md) | Valueset RouteOfAdministration from EDQM, ROA, export 1.6.2021, see https://standardterms.edqm.eu/# |
| [EprAgentRole](ValueSet-EprAgentRole.md) | Role codes as per Annex 5 EPRO-FDHA, CH:ATC, version July 2019 |
| [EprAuditTrailConsumptionEventType](ValueSet-EprAuditTrailConsumptionEventType.md) | Audit Trail Consumption Event Types for CH:ATC |
| [EprPurposeOfUse](ValueSet-EprPurposeOfUse.md) | Purpose Of Use as per Annex 5 EPRO-FDHA, Extension 1. |
| [EprRole](ValueSet-EprRole.md) | Role codes as per Annex 5 EPRO-FDHA, version July 2019 |
| [HCProfessional.hcProfession](ValueSet-HCProfessional.hcProfession.md) | HCProfessional.hcProfession |
| [HCProfessional.hcSpecialisation](ValueSet-HCProfessional.hcSpecialisation.md) | HCProfessional.hcSpecialisation |
| [IHE Pharmaceutical Advice Status List](ValueSet-ihe-pharmaceuticaladvicestatuslist.md) | IHE Pharmaceutical Advice Status List |
| [Main Guarantor](ValueSet-mainguarantor.md) | Codes for the different types of a main guarantor. |
| [ServiceRequest Category](ValueSet-servicerequest-category.md) | Codes for the category of service request used to define the requested service. |
| [Snomed CT Concept Viral Diseases](ValueSet-snomedct-concept-viraldiseases-vs.md) | The list of viral diseases by Snomed CT codes. |
| [SubmissionSet.Author.AuthorRole](ValueSet-SubmissionSet.Author.AuthorRole.md) | SubmissionSet.author.authorRole |
| [SubmissionSet.contentTypeCode](ValueSet-SubmissionSet.contentTypeCode.md) | SubmissionSet.contentTypeCode |
| [Treatment Reason](ValueSet-treatmentreason.md) | Value set including the values for the treatment reason. |
| [UnitCode](ValueSet-UnitCode.md) | UnitCode |
| [eCH-0007 Canton Abbreviation](ValueSet-ech-7-cantonabbreviation.md) | eCH-0007: Each municipality has a unique cantonal affiliation, which can be defined by the cantonal abbreviation commonly used in Switzerland. |
| [eCH-0007 Canton Abbreviation incl. FL (Fürstentum Liechtenstein)](ValueSet-ech-7-cantonflabbreviation.md) | eCH-0007: Analogous to cantonAbbreviation, but contains the entry 'FL' for the Principality of Liechtenstein in addition to the actual cantons. |
| [eCH-0046 Email Category](ValueSet-ech-46-emailcategory.md) | eCH-0046 defines these types of e-mail categories |
| [eCH-0046 Internet Category](ValueSet-ech-46-internetcategory.md) | eCH-0046 defines these types of internet categories |
| [eCH-0046 Phone Category](ValueSet-ech-46-phonecategory.md) | eCH-0046 defines these types of phone categories |
| [eCH-010 Address Line Type](ValueSet-ech-10-linetype.md) | eCH-010 defines different address lines (addressLine1,2 and street) |
| [eCH-011 FirstNameDataTypes](ValueSet-ech-11-firstnamedatatype.md) | eCH-011 defines different nameData Types, this ValueSet is the subset for the firstnames |
| [eCH-011 MaritalData Separation](ValueSet-ech-11-maritaldata-separation.md) | eCH-011 defines maritalData separation types |
| [eCH-011 MaritalStatus](ValueSet-ech-11-maritalstatus.md) | eCH-011 defines maritalStaus Types |
| [eCH-011 NameDataTypes](ValueSet-ech-11-namedatatype.md) | eCH-011 defines different nameData Types, this ValueSet is the subset for the family name |
| [eCH-011 Sex](ValueSet-ech-11-sex.md) | eCH-011 defines these sex types |

### Terminology: Code Systems 

These define new code systems used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [BFS Medizinische Statistik - 17 1.2.V02 - Aufenthaltsort vor dem Eintritt / Séjour avant l’admission / Luogo di soggiorno prima dell’ammissione](CodeSystem-bfs-medstats-17-admitsource.md) | BFS defines variables for medical statistic (german, french, italian) see[BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Unmittelbarer Aufenthaltsort vor dem Eintritt. Wo befand sich der Patient / die Patientin? |
| [BFS Medizinische Statistik - 18 1.2.V03 - Eintrittsart / Mode d’admission / Genere di ricovero](CodeSystem-bfs-medstats-18-admittype.md) | BFS defines variables for medical statistic (german, french, italian) see[BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Beschreibung der Umstände des Eintritts. Wie wurde der Patient / die Patientin aufgenommen? |
| [BFS Medizinische Statistik - 19 1.2.V04 - Einweisende Instanz / Décision d’envoi / Istanza ricoverante](CodeSystem-bfs-medstats-19-admitrole.md) | BFS defines variables for medical statistic (german, french, italian) see[BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Wer hat die Initiative für die Klinikeinweisung ergriffen? |
| [BFS Medizinische Statistik - 20 1.3.V01 - Behandlungsart / Type de prise en charge / Genere di trattamento](CodeSystem-bfs-medstats-20-encounterclass.md) | BFS defines variables for medical statistic (german, french, italian) see[BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Angabe der Behandlungsart |
| [BFS Medizinische Statistik - 21 1.3.V02 - Klasse / Classe / Classe](CodeSystem-bfs-medstats-21-encountertype.md) | BFS defines variables for medical statistic (german, french, italian) see[BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Im Rahmen des Spitalaufenthaltes belegte Liegeklasse, nicht die Versicherungskategorie. Bei Wechsel der Klasse ist die im Wesentlichen beanspruchte Klasse anzugeben. |
| [BFS Medizinische Statistik - 25 1.4.V02 - Hauptkostenträger für Grundversicherungsleistungen / Prise en charge des soins de base / Unità d’imputazione principale per le prestazioni dell’assicurazione di base](CodeSystem-bfs-medstats-25-mainguarantor.md) | BFS defines variables for medical statistic (german, french, italian) see[BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Angabe des Hauptgaranten, der für die Kosten der Grundversicherungsleistungen des Spitalaufenthalts im Wesentlichen aufkommt. Keine Mehrfachnennungen möglich. |
| [BFS Medizinische Statistik - 27 1.5.V02 - Entscheid für Austritt / Décision de sortie / Décisione dell’uscita](CodeSystem-bfs-medstats-27-dischargedecision.md) | BFS defines variables for medical statistic (german, french, italian) see[BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Wer hat den Klinikaustritt veranlasst? |
| [BFS Medizinische Statistik - 28 1.5.V03 - Aufenthalt nach Austritt / Séjour après la sortie / Destinazione dopo l’uscita](CodeSystem-bfs-medstats-28-dischargedestination.md) | BFS defines variables for medical statistic (german, french, italian) see[BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Wohin wurde der Patient entlassen? |
| [BFS Medizinische Statistik - 29 1.5.V04 - Behandlung nach Austritt / Prise en charge après la sortie / Trattamento dopo l’uscita](CodeSystem-bfs-medstats-29-dischargeencounter.md) | BFS defines variables for medical statistic (german, french, italian) see[BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Behandlung, Pflege, Rehabilitation nach dem Spitalaufenthalt. Es geht darum, den Behandlungserfolg resp. den Abhängigkeitsgrad bei Austritt anzugeben. Nur die am besten zutreffende Kategorie auswählen. |
| [CH AllergyIntolerance Category](CodeSystem-allergyintolerance-category-supplement.md) | Code supplement with translations of CHAllergyIntolerance category |
| [CH AllergyIntolerance Clinical Status](CodeSystem-allergyintolerance-clinical-supplement.md) | Code supplement with translations of CHAllergyIntolerance clinical status |
| [CH AllergyIntolerance Criticality Status](CodeSystem-allergyintolerance-criticality-supplement.md) | Code supplement with translations of CHAllergyIntolerance criticality status |
| [CH AllergyIntolerance Severity Status](CodeSystem-allergyintolerance-severity-supplement.md) | Code supplement with translations of CHAllergyIntolerance severity status |
| [CH AllergyIntolerance Type](CodeSystem-allergyintolerance-type-supplement.md) | Code supplement with translations of CHAllergyIntolerance type |
| [CH AllergyIntolerance Verification Status](CodeSystem-allergyintolerance-verification-supplement.md) | Code supplement with translations of CHAllergyIntolerance verification status |
| [CH VACD Old Swiss Vaccines](CodeSystem-ch-vacd-myvaccines-cs.md) | Old vaccines codes earlier available in Switzerland. |
| [CH VACD Swiss Immunization Recommendation Categories](CodeSystem-ch-vacd-recommendation-categories-cs.md) | Immunization recommendation categories available in Switzerland. |
| [CH VACD Swiss Recommendation Forecast Status](CodeSystem-ch-vacd-recommendation-forecast-status-cs.md) | Immunization recommendation forecast status values. |
| [CH VACD Swissmedic Authorized Immunoglobulin Codes](CodeSystem-ch-vacd-swissmedic-immunoglobulin-cs.md) | The ATC J06B – Immunoglobulin codes Swissmedic has given an autorization. |
| [CH VACD Swissmedic Authorized Immunsera Codes](CodeSystem-ch-vacd-swissmedic-immunesera-cs.md) | The ATC J06A – Immunsera codes Swissmedic has given an autorization. |
| [CH VACD Swissmedic Authorized Vaccines](CodeSystem-ch-vacd-swissmedic-cs.md) | The vaccines Swissmedic has given an autorization number. |
| [Condition Category](CodeSystem-ch-etoc-conditioncategory.md) | Additional codes for condition category. |
| [DICOM Unique Identifiers (UIDs)](CodeSystem-dcmuid.md) | A code system representing DICOM Unique Identifiers (UIDs), as per https://dicom.nema.org/medical/dicom/current/output/chtml/part06/chapter_A.html |
| [EDQM - Standard Terms](CodeSystem-edqm-standardterms.md) | EDQM - Standard Terms used in Switzerland (aggregations of codes of ValueSets Route of Administration, Dose Form and Administration Method, see original codes system defined in https://standardterms.edqm.eu/#) |
| [EventTiming](CodeSystem-event-timing.md) | Translations of concepts for event-timing |
| [IHE Pharmaceutical Advice Status List](CodeSystem-ihe-pharmaceuticaladvicestatuslist.md) | IHE Pharmaceutical Advice Status List |
| [Main guarantor](CodeSystem-mainguarantor.md) | BFS defines variables for the main guarantor, see[CodeSystem BfsMedstats25Mainguarantor](CodeSystem-bfs-medstats-25-mainguarantor.md). In the Swiss healthcare system, an additional value is used that is not covered by the BFS variables, so the code for supplementary insurance is defined here. |
| [ServiceRequest Category](CodeSystem-servicerequest-category.md) | Codes for the category of service request used to define the requested service. |
| [TimingEvent](CodeSystem-v3-TimingEvent.md) | Translations of concepts for v3-TimingEvent |
| [ch-ehealth-codesystem-agentRole](CodeSystem-2.16.756.5.30.1.127.3.10.14.md) | Role codes as per Annex 5 EPRO-FDHA, CH:ATC, version July 2019 |
| [ch-ehealth-codesystem-atc](CodeSystem-2.16.756.5.30.1.127.3.10.7.md) | Audit Trail Consumption Event Types for CH:ATC |
| [ch-ehealth-codesystem-eprdeletionstatus](CodeSystem-2.16.756.5.30.1.127.3.10.18.md) | Deletion codes as per supplement 1 to Annex 5 EPRO-FDHA. |
| [ch-ehealth-codesystem-format](CodeSystem-2.16.756.5.30.1.127.3.10.10.md) | Document format as per Annex; EPRO-FDHA. This unambiguous code defines the format of the XDS document. Together with the mimetype, this should provide the potential consumer with sufficient information as to whether they are in a position to process the document. |
| [ch-ehealth-codesystem-hpd](CodeSystem-2.16.756.5.30.1.127.3.10.9.md) | HCProfessional.hcProfession |
| [ch-ehealth-codesystem-language](CodeSystem-2.16.756.5.30.1.127.3.10.12.md) | Document language as per Annex 3 EPRO-FDHA. Defines the language in which the document was written. |
| [ch-ehealth-codesystem-medreg](CodeSystem-2.16.756.5.30.1.127.3.5.md) | HCProfessional.hcSpecialisation |
| [ch-ehealth-codesystem-nareg](CodeSystem-2.16.756.5.30.1.127.3.6.md) | Speciality of the author as per Annex 3. |
| [ch-ehealth-codesystem-purposeOfUse](CodeSystem-2.16.756.5.30.1.127.3.10.5.md) | Purpose Of Use as per Annex 5 EPRO-FDHA, Extension 1. |
| [ch-ehealth-codesystem-role](CodeSystem-2.16.756.5.30.1.127.3.10.6.md) | Role codes as per Annex 5 EPRO-FDHA, version July 2019 |
| [eCH-0007 Canton Abbreviation incl. FL (Fürstentum Liechtenstein)](CodeSystem-ech-7-cantonflabbreviation.md) | eCH-0007 defines cantonAbbreviation/cantonFLAbbreviation (Kantonskürzel inkl. Fürstentum Liechtenstein), see[here](https://www.ech.ch/de/ech/ech-0007/6.0). |
| [eCH-0046 Email Category](CodeSystem-ech-46-emailcategory.md) | eCH-0046 defines different types for e-mail categories. See https://www.ech.ch/de/ech/ech-0046/5.0 4.3.1 emailCategory |
| [eCH-0046 Internet Category](CodeSystem-ech-46-internetcategory.md) | eCH-0046 defines different types for internet categories. See https://www.ech.ch/de/ech/ech-0046/5.0 4.5.1 internetCategory |
| [eCH-0046 Phone Category](CodeSystem-ech-46-phonecategory.md) | eCH-0046 defines different types for phone categories. See https://www.ech.ch/de/ech/ech-0046/5.0 4.4.1 phoneNumberCategory |
| [eCH-010 Types](CodeSystem-ech-10.md) | eCH-010 defines different Types for a postal address |
| [eCH-011 MaritalData Separation](CodeSystem-ech-11-maritaldata-separation.md) | eCH-011 defines different maritalData separation zypes. See[maritalData - Zivilstandsangaben eCH-11](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.349276.html)and/or[BFS Amtlicher Katalog der Merkmale](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.349276.html). |
| [eCH-011 MaritalStatus](CodeSystem-ech-11-maritalstatus.md) | eCH-011 defines different maritalStatus Types. See[maritalData - Zivilstandsangaben eCH-11](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.349276.html)and/or[BFS Amtlicher Katalog der Merkmale](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.349276.html). |
| [eCH-011 Religion](CodeSystem-ech-11-religion.md) | eCH-011 defines different religionTypes. See https://ech.ch/de/ech/ech-0011/ (section 'religion – Konfessionszugehörigkeit') |
| [eCH-011 Sex](CodeSystem-ech-11-sex.md) | eCH-011 defines different sex Types. See https://www.ech.ch/vechweb/page?p=dossier&documentNumber=eCH-0011&documentVersion=8.13.3.5 3.3.3.3 sex |
| [eCH-011 Types](CodeSystem-ech-11.md) | eCH-011 defines different Types like Names, contactAdress etc. They are further described from the[BFS](https://www.bfs.admin.ch/bfs/de/home/register/personenregister/registerharmonisierung/nomenklaturen.assetdetail.349276.html)in 'Amtlicher Katalog der Merkmale' (Official catalogue of characteristics), Copyright BFS, Neuchâtel 2014, ISBN 978-3-303-00504-0 |

### Terminology: Naming Systems 

These define identifier and/or code system identities used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [AHVN13](NamingSystem-ahvn13.md) | The AHVN13 / NAVS13 - (abbreviation for new thirteen-digit Social Security number) - is an administrative identifier for natural persons in Switzerland. It is issued, announced and administered by the[Central Compensation Office](https://www.zas.admin.ch/zas/de/home/partenaires-et-institutions-/navs13.html). It is available to all organisations and communities for which there is a legal basis. The AHVN13 / NAVS13 shall not contain point characters for separation. |
| [BER](NamingSystem-ber.md) | The Business and Enterprise Register (BER) contains all enterprises and business in private and public law which are domiciled and exercise an economic activity in Switzerland. French: (REE) Registre des entreprises et des établissements. German: (BUR) Betriebs- und Unternehmensregister, Italian: (RIS) Registro delle imprese e degli stabilimenti. |
| [EPR_SPID](NamingSystem-epr-spid.md) | EPR-SPID: The Central Compensation Office (ZAS; CCO) assigns and manages the new patient identification number according to the EPRA (EPR-SPID), which is only linked internally in the CCO with the AHV number. It maintains the UPI identification database (Unique Personal Identifier Database), which the EPR communities may access. The law regulates how the the EPR-SPID can be used. SR 816.111 states (Art. 10 para. 3 EPDV) that communities must ensure that the EPR-SPID number cannot be not stored in document repositories or document registries. |
| [GLN](NamingSystem-gln.md) | Each healthcare partner (natural or legal person) is referenced with a unique code of type GLN (former name: EAN code) of the[GS1](https://www.gs1.ch/de/home)system, see[refdata](https://www.refdata.ch/). |
| [UIDB](NamingSystem-uidb.md) | Unique IDentification Business (UIDB) number (in French, numéro d'IDentification suisse des Enterprises (IDE)) (in German, Schweizer Unternehmens-IDentifikationsnummer (UID)) (in Italian, numero d'IDentificazione svizzero delle Imprese (IDI)) Organizations Covered By System: All Companies/organizations registered in the public Swiss Registers such as the Swiss Register of Commerce, the Value Added Tax (VAT) register, the Social security agencies Registers, Cantons registers, etc., and publish in the UID Register. |
| [ZSR](NamingSystem-zsr.md) | The ZSR number is issued to self-employed, natural or legal persons (organisations) who can and want to work at the expense of health insurance. See[Sasis](https://www.sasis.ch/de/779). German: ZSR (Zahlstellenregister), French: RCC (Registre des codes-créanciers), Italian: RCC (Registro dei codici creditori). |
| [forum-datenaustausch-tariff](NamingSystem-forum-datenaustausch-tariff.md) | Identification for Forum Datenaustausch tariff types.The detailed tariff list is avaible at this[url](https://www.forum-datenaustausch.ch/de/referenzdaten/)Naming Convention for fore each tariff type is:http://forum-datenaustausch.ch/tariff/[A-Z0-9]{3} |
| [gtin](NamingSystem-gtin.md) | Global Trade Item Number from[GS1](https://www.gs1.ch/de/home). |
| [veka](NamingSystem-veka.md) | Insurance card number (called VEKA-Nr. (Versichertenkarten-Nummer) in German) from[SASIS](https://www.sasis.ch/veka/). |

### Terminology: Concept Maps 

These define transformations to convert between codes by systems conforming with this implementation guide.

| | |
| :--- | :--- |
| [BFS Encounter Class to FHIR mapping](ConceptMap-bfs-encounter-class-to-fhir.md) | BFS Encounter Class to FHIR mapping |
| [DocumentEntry.confidentialityCode to FHIR mapping](ConceptMap-documententry-confidentialitycode-to-fhir.md) | DocumentEntry.confidentialityCode to FHIR mapping |
| [DocumentEntryClassCodeToDocumentEntryTypeCode](ConceptMap-DocumentEntryClassCodeToDocumentEntryTypeCode.md) | Mapping DocumentEntryClassCodeToDocumentEntryTypeCode |
| [HCProfessionalHCProfessionSpecialisationMap](ConceptMap-HCProfessionalHCProfessionSpecialisationMap.md) | Mapping HCProfessionalHCProfessionSpecialisationMap |
| [ImmunGlobuline To TargetDisease Mapping](ConceptMap-ch-vacd-immunoglobulin-targetdiseases-cm.md) | Mappings from ImmunGlobuline to TargetDisease according to the correcsponding valuesets |
| [MaritalStatus eCH-011 to FHIR mapping](ConceptMap-maritalstatus-ech11-to-fhir.md) | MaritalStatus mapping from eCH-011 to FHIR. See[maritalData - Zivilstandsangaben eCH-11](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.349276.html)and/or[BFS Amtlicher Katalog der Merkmale](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.349276.html). |
| [Sex eCH-011 to FHIR mapping](ConceptMap-sex-ech11-to-fhir.md) | Sex eCH-011 to FHIR mapping |
| [Snomed CT VaccineCode To SwissMedic VaccineCode](ConceptMap-ch-vacd-vaccines-sct-sm-cm.md) | In this ConceptMap the mappings from the codes out of the ValueSet[CH VACD Snomed CT for VaccineCode](ValueSet-ch-vacd-vaccines-snomedct-vs.md)to the codes out of the ValueSet[CH VACD Swissmedic code for VaccineCode](ValueSet-ch-vacd-vaccines-vs.md)are defined. |
| [Snomed CT VaccineCode To TargetDisease Mapping](ConceptMap-ch-vacd-vaccines-sct-targetdiseases-cm.md) | Mappings from SnomedCT VaccineCode to TargetDisease according to the correcsponding valuesets |
| [SwissMedic VaccineCode To Snomed CT VaccineCode](ConceptMap-ch-vacd-vaccines-sm-sct-cm.md) | In this ConceptMap the mappings from the codes out of the ValueSet[CH VACD Swissmedic code for VaccineCode](ValueSet-ch-vacd-vaccines-vs.md)to the codes out of the ValueSet[CH VACD Snomed CT for VaccineCode](ValueSet-ch-vacd-vaccines-snomedct-vs.md)are defined. |
| [TargetDisease To VaccineCode Mapping](ConceptMap-ch-vacd-targetdiseases-vaccines-cm.md) | Mappings from TargetDisease to VaccineCode according to the correcsponding valuesets |
| [VaccineCode To TargetDisease Mapping](ConceptMap-ch-vacd-vaccines-targetdiseases-cm.md) | Mappings from VaccineCode to TargetDisease according to the correcsponding valuesets |
| [eCH-0046 Email Category to FHIR Mapping](ConceptMap-ech-46-emailcategory-to-fhir.md) | ConceptMap to show the mapping from eCH-0046 e-mail category to FHIR |
| [eCH-0046 Internet Category to FHIR Mapping](ConceptMap-ech-46-internetcategory-to-fhir.md) | ConceptMap to show the mapping from eCH-0046 internet category to FHIR |
| [eCH-0046 Phone Category to FHIR Mapping](ConceptMap-ech-46-phonecategory-to-fhir.md) | ConceptMap to show the mapping from eCH-0046 phone category to FHIR |

